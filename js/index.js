const SHOW_FIXED_NAV_CLASS = 'show-fixed-nav'

let scrollY = window.scrollY
let prevScrollY = null
let ticking = false

const socialLinks = document.querySelector('[data-id=social-links]')
const fixedNav = [socialLinks.cloneNode(true)]
  .map(function (el) {
    el.classList.add('social-links--fixed')
    el.dataset.id = 'social-links-clone'
    return el
  })[0]

const fixedNavThreshold = socialLinks.getBoundingClientRect().bottom + window.scrollY

const body = document.querySelector('body')
body.appendChild(fixedNav)

if (fixedNav.offsetHeight) {
  initializeFixedNav()
} else {
  body.removeChild(fixedNav)
}

function initializeFixedNav() {
  window.addEventListener('scroll', fixedNavOnScroll)
  showOrHideFixedNav()
}

function fixedNavOnScroll() {
  if (!fixedNav.offsetHeight) {
    return unmountFixedNav()
  }
  scrollY = window.scrollY

  if (!ticking) {
    window.requestAnimationFrame(function () {
      if (Math.abs(prevScrollY - scrollY) > 50) {
        showOrHideFixedNav()
      }
      ticking = false
    })

    ticking = true
  }
}

function unmountFixedNav() {
  body.classList.remove(SHOW_FIXED_NAV_CLASS)
  body.removeChild(fixedNav)
  window.removeEventListener('scroll', fixedNavOnScroll)
}

function showOrHideFixedNav() {
  if (scrollIsBelow(scrollY, fixedNavThreshold) && isScrollUp(scrollY, prevScrollY)) {
    body.classList.add(SHOW_FIXED_NAV_CLASS)
  } else if (!scrollIsBelow(scrollY, fixedNavThreshold) || !isScrollUp(scrollY, prevScrollY)) {
    body.classList.remove(SHOW_FIXED_NAV_CLASS)
  }
  prevScrollY = window.scrollY
}

function scrollIsBelow(scrollY, threshold) {
  return scrollY > threshold
}

function isScrollUp(scrollY, prevScrollY) {
  return prevScrollY === null ? false : scrollY < prevScrollY
}