document.addEventListener('DOMContentLoaded', function() {
    // Lắng nghe sự kiện click cho các nút "Thêm vào giỏ"
    const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Lấy ID sản phẩm từ ID của nút
            const productID = this.id.split('-')[4]; // Lấy ID từ ID của nút

            // Lấy số lượng sản phẩm từ input
            const quantity = document.getElementById('quantity-input').value;

            // Gửi yêu cầu AJAX để thêm sản phẩm vào giỏ hàng
            addToCart(productID, quantity);
        });
    });

    // Hàm thêm sản phẩm vào giỏ hàng bằng AJAX
    function addToCart(productID, quantity) {
        const formData = new URLSearchParams();
        formData.append('productID', productID);
        formData.append('quantity', quantity);

        fetch('modules/cart_module.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: formData.toString(),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Phản hồi mạng không được ổn định');
                }
                return response.text();
            })
            .then(data => {
                // Hiển thị thông báo thành công cho người dùng
                const messageDiv = document.getElementById('message');
                messageDiv.textContent = 'Thêm vào giỏ hàng thành công';
                messageDiv.style.color = 'green';
                messageDiv.style.display = 'block';

                console.log('Success:', data);
            })
            .catch(error => {
                // Hiển thị thông báo lỗi cho người dùng
                const messageDiv = document.getElementById('message');
                messageDiv.textContent = 'Đã xảy ra lỗi khi thêm vào giỏ hàng';
                messageDiv.style.color = 'red';
                messageDiv.style.display = 'block';

                console.error('Error:', error);
            });
    }
});

// document.addEventListener('DOMContentLoaded', function() {
//     const checkoutButton = document.querySelector('.btn-buy');

//     checkoutButton.addEventListener('click', function() {
//         // Gửi yêu cầu AJAX để thực hiện thanh toán và xóa giỏ hàng
//         buy();
//     });

//     function buy() {
//         fetch('modules/buy_module.php', {
//                 method: 'GET',
//             })
//             .then(response => response.text())
//             .then(data => {
//                 console.log(data); // Hiển thị thông báo hoặc xử lý dữ liệu trả về từ server
//             })
//             .catch(error => {
//                 console.error('Error:', error);
//             });
//     }
// });