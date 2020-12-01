const forms = document.querySelector('.formBook')

forms.addEventListener('submit', () => {
    //e.preventDefault();

    const bookDate = forms.arrivedate.value;
    const bookDated = forms.departdate.value;
    const room = forms.room.value;
    const guest = forms.guest.value;
    const bookEmail = forms.email.value;
    const bookMessage = forms.message.value;

    if (bookDate == '') {
        alert("Enter a Valid Arrival Date!");
        forms.arrivedate.style.border = "red";
        return false;
    }
    if (bookDated == '') {
        alert("Enter a Valid Departure Date!");
        forms.departdate.style.border = "red";
        return false;
    }
    if (room == '') {
        alert("Room Field Must Not be Empty");
        forms.room.style.border = "red";
        return false;
    }
    if (guest == '') {
        alert("Enter a Valid guest!");
        forms.guest.style.border = "red";
        return false;
    }
    if (bookEmail == '') {
        alert("Enter a Valid Email Address!");
        forms.email.style.border = "red";
        return false;
    }
    if (bookMessage == '') {
        alert("Message Field Must Not be Empty!");
        forms.message.style.border = "red";
        return false;
    }
    forms.submit();
})