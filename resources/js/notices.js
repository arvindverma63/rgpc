document.addEventListener('DOMContentLoaded', () => {
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('noticeFile');
    const dropText = document.getElementById('dropText');

    if (dropZone && fileInput && dropText) {
        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('border-primary', 'bg-primary-subtle');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('border-primary', 'bg-primary-subtle');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('border-primary', 'bg-primary-subtle');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                dropText.textContent = `Selected file: ${files[0].name}`;
            }
        });

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                dropText.textContent = `Selected file: ${fileInput.files[0].name}`;
            }
        });
    }

    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', () => card.style.transform = 'scale(1.02)');
        card.addEventListener('mouseleave', () => card.style.transform = 'scale(1)');
    });
});
