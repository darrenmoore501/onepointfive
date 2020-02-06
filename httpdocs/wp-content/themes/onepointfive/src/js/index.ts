import Masthead from './components/Masthead';
import Hero from './components/Hero';
import MobileNav from './components/MobileNav';

const masthead = new Masthead();
new MobileNav();

window.addEventListener('scroll', () => {
  masthead.onScroll();
});
