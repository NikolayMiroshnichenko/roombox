const refs = {
    popupList: document.querySelector('.slider-wrapper'),
    title: document.querySelector('.popup-name'),
    popup: document.querySelector('.popup-wrapper'),
    form: document.querySelector('.js-popap-form'),
}

refs.popupList.addEventListener('click', openPopup);
refs.popup.addEventListener('click', closePopup);

function openPopup(e)
{
    e.preventDefault();
    if (e.target.nodeName != 'A') return;

    refs.title.textContent = e.target.dataset.name;
    refs.form.id = e.target.dataset.id;
    refs.popup.style.display = 'block';
}

function closePopup(e)
{
    if(e.target.dataset.pupap != 'close') return;

    refs.title.textContent = "";
    refs.popup.style.display = 'none';
    refs.form.id = "";
}
