import {TweenLite, TimelineLite} from 'gsap';

class Masthead {

  public masthead = document.getElementById('masthead');
  public logo: Element | null = null;
  public threshold: number = 100; // pixels
  public time: number = 0.25;
  private scrollDist: number = 0;

  private TLOpacity = new TimelineLite({paused: true});
  private TLSize = new TimelineLite({paused: true});

  constructor() {
    this.scrollDist = window.pageYOffset;

    this.getLogo();
    this.setupOpacityTimeline();
    this.setupSizeTimeline();

    this.onScroll();
  }

  public onScroll = () => {
    if (!this.masthead) return;

    this.scrollDist = window.pageYOffset;

    if (this.scrollDist >= this.threshold) {
      this.toggleClass();
      this.makeOpaque();
      this.makeSmaller();
    } else {
      this.toggleClass(false);
      this.makeTransparent();
      this.makeBigger();
    }

  };

  private getLogo = () => {
    if (!this.masthead) return;

    this.logo = this.masthead.getElementsByClassName('custom-logo')[0];
  };

  /**
   * Setup the timeline for the opacity transition
   */
  private setupOpacityTimeline = () => {
    this.TLOpacity.add([
    
    ]);
  };

  /**
   * Setup the timeline for the size transition
   */
  private setupSizeTimeline = () => {
    this.TLSize.add([
      TweenLite.to(this.logo, this.time, {
        width: 125
      }),

      TweenLite.to(this.masthead, this.time, {
        paddingTop: 5,
        paddingBottom: 5
      })
    ])
  };

  private makeOpaque = () => this.TLOpacity.play();
  private makeTransparent = () => this.TLOpacity.reverse();
  private makeSmaller = () => this.TLSize.play();
  private makeBigger = () => this.TLSize.reverse();

  private toggleClass = (add: boolean = true) => {
    if (!this.masthead) return;

    let className = 'scrolled';

    if (add) {
      this.masthead.classList.add(className)
    } else {
      this.masthead.classList.remove(className);
    }
  }

}

export default Masthead;