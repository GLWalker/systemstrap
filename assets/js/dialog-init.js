(() => {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        const dialogs = document.querySelectorAll('dialog.strap-dialog');

        dialogs.forEach(dialog => {
            // Close when clicking on the backdrop
            dialog.addEventListener('click', (event) => {
                const rect = dialog.getBoundingClientRect();
                const isInDialog = (
                    rect.top <= event.clientY &&
                    event.clientY <= rect.top + rect.height &&
                    rect.left <= event.clientX &&
                    event.clientX <= rect.left + rect.width
                );
                
                // If the click is outside the dialog bounding box (the content), close it
                if (!isInDialog) {
                    dialog.close();
                }
            });

            // Allow generic `.close` or `-close` classes inside the dialog to close it
            const closeBtns = dialog.querySelectorAll('.-close, .close, [data-dismiss="dialog"]');
            closeBtns.forEach(btn => {
                btn.style.cursor = 'pointer';
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    dialog.close();
                });
            });
        });
    });
})();
