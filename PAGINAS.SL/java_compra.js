const form = document.querySelector('.form-container form');
const sendInvoiceBtn = document.querySelector('#send-invoice');
const addMoreBtn = document.querySelector('#add-more');

sendInvoiceBtn.addEventListener('click', () => {
  form.reset();
});

addMoreBtn.addEventListener('click', () => {
  form.reset();
});