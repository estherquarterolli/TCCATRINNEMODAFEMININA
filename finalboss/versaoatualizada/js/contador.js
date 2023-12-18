document.addEventListener('DOMContentLoaded', function () {
    const counterBtn = document.getElementById('counterBtn');
    const countElement = document.getElementById('count');
    const plusElement = document.getElementById('plus');
    const minusElement = document.getElementById('minus');
  
    let count = 0;
  
    function updateCount() {
      countElement.textContent = count;
    }
  
    function increment() {
      count++;
      updateCount();
    }
  
    function decrement() {
      count--;
      updateCount();
    }
  
    plusElement.addEventListener('click', increment);
    minusElement.addEventListener('click', decrement);
  });
  