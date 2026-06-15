(() => {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        const dialogs = document.querySelectorAll('dialog.strap-dialog');
        const syncTriggerState = (trigger, isExpanded) => {
            if (!trigger) {
                return;
            }

            trigger.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

            const label = isExpanded
                ? trigger.getAttribute('data-strap-dialog-label-open')
                : trigger.getAttribute('data-strap-dialog-label-closed');

            if (label) {
                trigger.setAttribute('aria-label', label);
            }
        };

        document.querySelectorAll('[data-strap-dialog-target]').forEach(trigger => {
            syncTriggerState(trigger, false);
        });

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

            dialog.addEventListener('close', () => {
                const trigger = dialog.__strapTrigger || null;
                syncTriggerState(trigger, false);

                if (trigger) {
                    trigger.focus({ preventScroll: true });
                }

                dialog.__strapTrigger = null;
            });
        });

        const openDialogFromTrigger = (trigger, event) => {
            const selector = trigger.getAttribute('data-strap-dialog-target');
            if (!selector) {
                return;
            }

            const dialog = document.querySelector(selector);
            if (!dialog || typeof dialog.showModal !== 'function') {
                return;
            }

            event.preventDefault();
            dialog.__strapTrigger = trigger;
            syncTriggerState(trigger, true);
            dialog.showModal();
        };

        document.addEventListener('click', (event) => {
            const trigger = event.target.closest('[data-strap-dialog-target]');
            if (!trigger) {
                return;
            }

            openDialogFromTrigger(trigger, event);
        });

        document.addEventListener('keydown', (event) => {
            if (event.key !== 'Enter' && event.key !== ' ') {
                return;
            }

            const trigger = event.target.closest('[data-strap-dialog-target]');
            if (!trigger) {
                return;
            }

            openDialogFromTrigger(trigger, event);
        });
    });
})();
