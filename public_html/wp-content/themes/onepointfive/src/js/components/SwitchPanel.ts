import {TimelineMax, TweenLite} from 'gsap';

export interface Settings {
  onImage: null | string,
  offImage: null | string,
  colorOff: null | string,
  colorOn: null | string,
}

export default class SwitchPanel {

  private scrollDist = 0;
  public element: HTMLElement | null = null;
  private elementDistance = 0;
  private elementHeight = 0;
  private animFired = false;

  public yOffset = -400;
  public settings: Settings = {
    onImage: '',
    offImage: '',
    colorOff: '',
    colorOn: ''
  };

  constructor(element: HTMLElement) {
    this.element = element;

    this.scrollDist = window.pageYOffset;

    window.addEventListener('scroll', this.onScroll);

    this.getPanelDistance();
    this.getPanelHeight();
    this.isInViewport();
    this.getPanelVars();
    this.setupPanel();
  }

  setupPanel = () => {
    let image = this.getImageElement();

    if (!image || !this.settings.offImage) return;

    image.setAttribute('src', this.settings.offImage);

  };

  onScroll = () => {
    this.scrollDist = window.pageYOffset;

    this.isInViewport();
  };

  getPanelVars = () => {
    if (!this.element) return;

    this.settings.onImage = this.element.getAttribute('data-image-on');
    this.settings.offImage = this.element.getAttribute('data-image-off');
    this.settings.colorOn = this.element.getAttribute('data-color-on');
    this.settings.colorOff = this.element.getAttribute('data-color-off');
  };

  getPanelDistance = () => {
    if (!this.element) return;

    let rect = this.element.getBoundingClientRect();

    this.elementDistance = rect.top;
  };

  getPanelHeight = () => {
    if (!this.element) return;

    this.elementHeight = this.element.offsetHeight;
  };


  isInViewport = () => {
    if (this.scrollDist > this.elementDistance + this.yOffset) {

      if (!this.animFired) {
        window.setTimeout(this.animateImage, 1000);

        this.animFired = true;
      }
    }
  };

  animateText = () => {
    if (!this.element) return;

    let content = this.element.getElementsByClassName('content-wrapper')[0];
    TweenLite.to(content, 0.25, {opacity: 1});
  };

  animateImage = () => {
    if (!this.element || !this.settings.onImage) return;

    let image = this.getImageElement();

    if (!image) return;

    let onImage = new Image();

    onImage.src = this.settings.onImage;

    onImage.onload = () => {
      this.animateText();
      this.animateBackground();
    };

    image.setAttribute('src', onImage.src);
  };

  getImageElement = (): HTMLElement | undefined => {
    if (!this.element) return;

    let imageWrapper = this.element.getElementsByClassName('switchable-image')[0];
    return imageWrapper.getElementsByTagName('img')[0];
  };

  animateBackground = () => {
    TweenLite.to(this.element, 0.25, {background: this.settings.colorOn})
  }

}