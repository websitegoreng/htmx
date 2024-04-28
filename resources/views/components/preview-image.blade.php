<script>
    function displayImage() {
        const input = document.getElementById('photoInput');
        const preview = document.getElementById('previewImage');

        if(input.files && input.file[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const preview = e.target.result();
                reader.classList.remove('hidden');
            }

            reader.readAsDataURL(input.fils[0]);
        }

        document.getElementById('photoInput').addEventListener('change', displayImage);
    }
</script>
