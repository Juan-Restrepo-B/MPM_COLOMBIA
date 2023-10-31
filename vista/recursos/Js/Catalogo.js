const tabs = document.querySelectorAll('.tab input[type="radio"]');
tabs.forEach(tab => {
  tab.addEventListener('change', () => {
    const activeTabs = document.querySelectorAll('.tab input[type="radio"]:checked');
    activeTabs.forEach(activeTab => {
      if (activeTab !== tab) {
        activeTab.checked = false;
      }
    });
  });
});