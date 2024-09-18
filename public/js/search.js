function searchProducts() {
    const search = document.getElementById('search-input').value;
    const currentURL = window.location.href;
    const urlParams = new URLSearchParams(window.location.search);
    const productIdParam = urlParams.get('productid');

    // Kiểm tra xem productIdParam có tồn tại (nghĩa là đang ở trang sản phẩm cụ thể) không
    if (productIdParam !== null || !currentURL.endsWith('index.php')) {
        // Nếu đang ở trang sản phẩm cụ thể, chuyển hướng đến trang index.php với tham số tìm kiếm
        window.location.href = 'temp.php?search=' + search;
    } else {
        // Nếu không phải trang sản phẩm cụ thể, thực hiện tìm kiếm trên trang hiện tại
        const xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const productListDiv = document.getElementById('item-list');
                productListDiv.innerHTML = xhr.responseText;
            }
        };

        xhr.open('GET', `index.php?search=${search}`, true);
        xhr.send();
    }
}


function fetchProductContent(categoryid) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const contentDiv = document.getElementById('item-list');
            contentDiv.innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', `index.php?categoryid=${categoryid}`, true);
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function() {
    const menuOptions = document.querySelectorAll('.category-check');
    menuOptions.forEach(option => {
        option.addEventListener('change', function() {
            const selectedOption = document.querySelector('input[name="category-options"]:checked').id;
            fetchProductContent(selectedOption);
        });
    });
});