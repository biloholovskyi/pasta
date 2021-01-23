const switchTabs = (e) => {
  const tabs = $('.news_tab--head .tabs .tab');
  const current = $(e.currentTarget);
  tabs.removeClass('active');
  current.addClass('active');
  const id = current.attr('id').split('tab-')[1];
  $('.news_tab--body').removeClass('show');
  $('#body-' + id).addClass('show');
}

export {switchTabs}