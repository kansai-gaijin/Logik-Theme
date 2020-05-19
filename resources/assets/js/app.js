import $ from 'jquery'

const win = $(window);
const body = $('body');
const selHtml = $('html');

$(document).ready(()=>{

  win.scroll(handleScroll);

});

const init = () => {

}

const handleScroll = () => {
  alert('yay');
}

const handleLoad = () => {
  body.addClass('loaded');
}