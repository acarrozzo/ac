;(function () {
  var old = window.gPartners || {},
    classes = 'pub_300x250 pub_300x250m pub_728x90 text-ad textAd text_ad text_ads text-ads text-ad-links'

  window.gPartners = {
    _maxCheckTimes: 50,
    _checkFrequency: 100,
    _checkRunning: false,

    detected: false,
    queue: old.queue,
    id: old.id,
    url: old.serverUrl,

    init: function (id) {
      this.id = id
      this.checkForAdblock()
    },
    show: function (w, h, elId) {
      if (!this.detected) {
        this.queue.push(arguments)
        return
      }

      addBanner(this.id, w, h, elId, this.url)
    },
    checkForAdblock: function () {
      if (this._checkRunning) return
      var doc = document

      this._check_running = true
      if (doc.readyState == 'complete' || doc.readyState == 'interactive') this.check()
      else doc.addEventListener( "DOMContentLoaded", this.check.bind(this), false )
    },
    runQueue: function () {
      for (var i = 0; i < this.queue.length; i++) {
        this.show.apply(this, this.queue[i])
      }

      this.queue = []
    },
    removeAdblockStyle: function () {
      adBlock()
      adBlockPlus()
      ublock()

      function adBlockPlus() {
        var html = document.querySelector('html'),
          shadow = html.shadowRoot,
          style = shadow && shadow.styleSheets
        if (!style || !style.length) return

        for (var i = 0; i < style.length; i++) remove(style[i])
      }

      function adBlock() {
        var style = document.querySelectorAll('head style')
        if (!style || !style.length) return
        for (var i = 0; i < style.length; i++) {
          if (!!style[i].innerHTML) continue
          remove(style[i].sheet)
        }
      }

      function ublock() {
        var style = document.querySelectorAll('head > style, body > style')

        if (!style || !style.length) return

        for (var i = 0; i < style.length; i++) {
          var re = new RegExp(classes + '.*{display:none !important;}'),
            cssText = style[i].innerHTML

          if (!cssText) continue

          cssText = cssText.replace(/\n|\./g, '').replace(/,/g, ' ')

          if (re.test(cssText))
          remove(style[i].sheet)
        }
      }

      function remove(style) {
        if (!style || !style.rules) return
        var rules = style.rules,
          length = rules.length,
          count = 0

        if (length < 1) return

        for (var i = 0; i < rules.length; i++) {
          var rule = rules.item(i),
            selector = rule.selectorText,
            css = rule.cssText,
            displayNoneOnly =/{display:none!important;(?:.)+orphans:\d+!important;}/.test(css.replace(/\s/g, ''))

          if (displayNoneOnly && (selector.length > 40)) count++
        }

        if (count >= length * 0.9) {
          style.disabled = true
          for (var i = 0; i < rules.length; i++) {
            var rule = rules.item(i),
              selector = rule.selectorText,
              els = document.querySelectorAll(selector)


            for (var j = 0; j < els.length; j++) {
              var el = els[j]
              el.style.cssText = el.style.cssText.replace(/display:[\s]none[\s]!important;/g, '')
            }
            try {
              style.deleteRule(i)
            } catch(e) {}
          }
        }
      }
    },
    check: function() {
      var el = addTestEl(),
        checkTimes = 0,
        checkInterval = setInterval(_.bind(this), this._checkFrequency)

      function _(){
        checkTimes++
        if (this.detected || checkTimes > this._maxCheckTimes) {
          clearInterval(checkInterval)
        }

        if(notRendered(el) || isHidden(el)) {
          this.detected = true
          this.removeAdblockStyle()
          this.runQueue()

          el.parentNode && el.parentNode.removeChild(el)
        }
      }
    }
  }


  window.gPartners.checkForAdblock()

  function addTestEl() {
    var bait = {
        class: classes,
        style: 'width: 1px !important; height: 1px !important; position: absolute !important; left: -10000px !important; top: -1000px !important;'
      },
      el = document.createElement('div'),
      body = window.document.body

    el.setAttribute('class', bait.class)
    el.setAttribute('style', bait.style)

    body.appendChild(el)
    return el
  }

  function notRendered(el) {
    return document.body.getAttribute('abp') !== null
      || el.offsetParent === null
      || el.offsetHeight == 0
      || el.offsetLeft == 0
      || el.offsetTop == 0
      || el.offsetWidth == 0
      || el.clientHeight == 0
      || el.clientWidth == 0
  }

  function isHidden(el) {
    if(!window.getComputedStyle) return

    var style = window.getComputedStyle(el, null)
    return style.getPropertyValue('display') == 'none'
      || style.getPropertyValue('visibility') == 'hidden'
  }

  function addBanner(partnerId, w, h, elId, srcUrl) {
    var el = document.getElementById(elId),
      banner
    if (!el) return
    banner = getBanner(w,h)
    if (!banner) return

    var url = composeUrl(partnerId, banner),
      style = getResetStyles(w, h),
      bannerStyles = getBannerStyles()
    el.innerHTML = '\
    <a href="' + url + '" style="' + style + bannerStyles + '">\
      <img style="' + style + '" src="//' + srcUrl + '/img/' + banner + '"/>\
    </a>'
    //el.setAttribute('style', style + bannerStyles)
  }

  function composeUrl (id, banner) {
    var re = /(.*)\..*$/
    bannerId = re.test(banner) && banner.match(re)[1] || 'unknown'
    return 'https://www.grammarly.com/?q=grammar&utm_source=placement&utm_medium=cpc&utm_content='  + bannerId + '&utm_term=' + id
  }

  function getBannerStyles () {
    return 'position: relative; display: inline-block;'
  }

  function getResetStyles (w, h) {
    return 'width: ' + w + 'px; height: ' + h + 'px; margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;'
  }

  function getBanner(w, h) {
    var banners = {
        '728x90': ['72890_1.gif', '72890_2.gif', '72890_3.png'],
        '468x60': ['46860.png'],
        '300x600': ['300600.gif'],
        '300x250': ['300250_1.png', '300250_2.gif', '300250_3.gif'],
        '160x600': ['160600_1.gif', '160600_2.gif', '160600_3.gif', ],
        '250x250': ['250250.png']
      },
      banner = banners[w + 'x' + h],
      re = /\..*$/,
      i

    if (!banner || !banner.length) return
    i = Math.floor(Math.random() * banner.length)
    return banner[i]
  }
})()
