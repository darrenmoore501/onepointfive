export default class MobileNav {

  public masthead = document.getElementById('masthead');
  private button: Element | null = document.getElementById('toggle-mobile-menu');
  private menu: Element | null = document.getElementById('mobile-menu-wrapper');

  constructor() {
    this.handleButtonClick();
  }

  handleButtonClick = () => {
    if (!this.button) return;

    this.button.addEventListener('click', () => {
      this.toggleMenu();
    })
  };

  toggleMenu = () => {
    if ( !this.menu ) return;

    let { classList } = this.menu;

    if ( ! classList.contains('open') ){
      classList.add('open')
    } else {
      classList.remove('open');
    }
  }

}