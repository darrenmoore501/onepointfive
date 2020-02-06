import {TweenLite} from 'gsap';

export default class Hero {

  public hero = document.getElementsByClassName('wp-block-ecovolt-hero')[0];
  private background: Element | null = null;
  private scrollDist = 0;

  constructor(element: Element) {
    this.hero = element;

    this.scrollDist = window.pageYOffset;

    this.getBackground();

    window.addEventListener('scroll', this.onScroll);
  }

  public onScroll = () => {
    this.scrollDist = window.pageYOffset;

    this.animateBackground();
  };

  private getBackground = () => {
    if (!this.hero) return;

    this.background = this.hero.getElementsByClassName('background')[0];
  };

  private animateBackground = () => {
    TweenLite.set(this.background, {
      y: this.scrollDist / 2
    })
  }
}