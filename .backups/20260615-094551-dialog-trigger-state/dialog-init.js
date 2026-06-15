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

        document.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-strap-dialog-target]');
            if (!trigger) {
                return;
            }

            const selector = trigger.getAttribute('data-strap-dialog-target');
            if (!selector) {
                return;
            }

            const dialog = document.querySelector(selector);
            if (!dialog || typeof dialog.showModal !== 'function') {
                return;
            }

            event.preventDefault();
            dialog.showModal();
        });

        document.addEventListener('keydown', (event) => {
            if (event.key !== 'Enter' && event.key !== ' ') {
                return;
            }

            const trigger = event.target.closest('[data-strap-dialog-target]');
            if (!trigger) {
                return;
            }

            const selector = trigger.getAttribute('data-strap-dialog-target');
            if (!selector) {
                return;
            }

            const dialog = document.querySelector(selector);
            if (!dialog || typeof dialog.showModal !== 'function') {
                return;
            }

            event.preventDefault();
            dialog.showModal();
        });
    });
})();
