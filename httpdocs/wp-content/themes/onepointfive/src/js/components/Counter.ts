export default class Counter {

  public element: Element | null = null;
  public countTo: number = 0;
  public countFrom: number = 0;
  public countStep: number = 1;
  private currentNumber: number = 0;
  private scrollDist = 0;
  private elemPosition = 0;
  private triggered = false;

  constructor(element: Element) {
    this.element = element;

    this.scrollDist = window.pageYOffset;
    this.getSettingsFromElement();

    this.getElementPosition();
    this.handleScroll();
  }

  getElementPosition = () => {
    if (!this.element) return;

    let rect = this.element.getBoundingClientRect();

    this.elemPosition = rect.top;
  };

  handleScroll = () => {
    window.addEventListener('scroll', () => {
      this.scrollDist = window.pageYOffset;

      if (this.scrollDist >= this.elemPosition - window.innerHeight) {

        if (!this.triggered) {
          this.animateCountUp();
        }
      }

    })
  };

  getSettingsFromElement = () => {
    if (!this.element) return;

    let attrTo: string | null = this.element.getAttribute('data-to'),
      attrFrom: string | null = this.element.getAttribute('data-from'),
      attrStep: string | null = this.element.getAttribute('data-step');

    if (attrTo) this.countTo = parseFloat(attrTo);
    if (attrFrom) this.countFrom = parseFloat(attrFrom);
    if (attrFrom) this.currentNumber = parseFloat(attrFrom);
    if (attrStep) this.countStep = parseFloat(attrStep);
  };

  public onScroll = () => {
    this.scrollDist = window.pageYOffset;
  };

  public animateCountUp = () => {
    if (!this.element) return;

    this.triggered = true;

    let interval = setInterval(() => {
      if (!this.element) return;

      this.currentNumber = this.currentNumber + this.countStep;

      this.element.innerHTML = (Math.round(this.currentNumber * 100) / 100).toString();

      if (this.currentNumber >= this.countTo) clearInterval(interval);

    }, 50)

  }


}