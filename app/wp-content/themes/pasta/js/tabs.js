const switchTabs = (e) => {
  const tabs = $('.news_tab--head .tabs .tab');
  const current = $(e.currentTarget);
  tabs.removeClass('active');
  current.addClass('active');
  const id = current.attr('id').split('tab-')[1];
  $('.news_tab--body').removeClass('show');
  $('#body-' + id).addClass('show');
}

const switchMaps = (e) => {
  const tabs = $('.shop_block--content .news_tab--body .city_item');
  const current = $(e.currentTarget);
  tabs.removeClass('active');
  current.addClass('active');
  const id = current.attr('id').split('city-')[1];
  $('.shop_block--content .map').removeClass('active');
  $('#map-' + id).addClass('active');
}

export {switchTabs, switchMaps}