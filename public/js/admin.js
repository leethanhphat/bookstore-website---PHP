function fetchAdminContent(optionId) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const contentDiv = document.getElementById('content');
            contentDiv.innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', `admin_content.php?options=${optionId}`, true);
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function() {
    const menuOptions = document.querySelectorAll('.btn-check');
    menuOptions.forEach(option => {
        option.addEventListener('change', function() {
            const selectedOption = document.querySelector('input[name="options"]:checked').id;
            fetchAdminContent(selectedOption);
        });
    });
});