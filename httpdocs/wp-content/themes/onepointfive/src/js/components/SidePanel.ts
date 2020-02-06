import {TweenLite, TimelineMax} from 'gsap';

export interface Settings {
  imageOne: string,
  imageTwo: string,
  delay: number
}

export class SidePanel {

  public element: Element | null = null;
  private image: Element | null = null;
  private TL: TimelineMax = new TimelineMax({paused: true, repeat: -1});

  private settings = {
    imageOne: "",
    imageTwo: "",
    delay: 5
  };

  constructor(element: Element) {
    this.element = element;

    this.init();
  }

  init = () => {
    if (!this.element) return;

    this.getSettings();
    this.getImageElement();
    this.setupSecondImage();
    this.setupAnimation();
    this.animateImage();
  };

  getSettings = () => {
    if (!this.element) return;

    let {element} = this;

    let attrOne = element.getAttribute('data-image-first');
    let attrTwo = element.getAttribute('data-image-second');
    let delay = element.getAttribute('data-animation-delay');

    if (attrOne) this.settings.imageOne = attrOne;
    if (attrTwo) this.settings.imageTwo = attrTwo;
    if (delay) this.settings.delay = parseInt(delay);

  };

  getImageElement = () => {
    if (!this.element) return;

    this.image = this.element.getElementsByClassName('wp-block-ecovolt-full-side-image')[0];
  };

  setupSecondImage = () => {
    if (!this.image) return;

    let htmlImage: HTMLElement = document.createElement(`img`);
    htmlImage.setAttribute('src', this.settings.imageTwo);

    TweenLite.set(htmlImage, {opacity: 0});

    this.image.appendChild(htmlImage);
  };

  setupAnimation = () => {
    if (!this.image) return;

    this.TL.add(
      TweenLite.to(this.image.getElementsByTagName('img'), 0.5, {
        opacity: 1,
        delay: this.settings.delay
      })
    );

    this.TL.add(
      TweenLite.to(this.image.getElementsByTagName('img'), 0.5, {
        opacity: 0,
        delay: this.settings.delay
      })
    );

  };

  animateImage = () => {
    this.TL.play();
  }

}

export default SidePanel;