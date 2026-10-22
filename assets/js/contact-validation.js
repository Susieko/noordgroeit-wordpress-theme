/**
 * Contact-page validation feedback.
 *
 * Keep native required/type constraints as a no-JavaScript fallback.
 * Only disable browser popups when this module is ready.
 */
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.ng-contact-page .ng-contact-form');
    if (!form) return;

    const requiredFields = Array.from(
        form.querySelectorAll('.ng-contact-field [required]')
    );
    if (!requiredFields.length) return;

    const messages = {
        'ng-contact-name': 'Vul je naam in.',
        'ng-contact-email': 'Vul je e-mailadres in.',
        'ng-contact-topic': 'Kies een onderwerp.',
        'ng-contact-message': 'Schrijf een bericht.'
    };

    const messageFor = (field) => {
        if (field.validity.typeMismatch && field.type === 'email') {
            return 'Vul een geldig e-mailadres in.';
        }
        if (field.validity.valueMissing) {
            return messages[field.id] || 'Vul dit verplichte veld in.';
        }
        return 'Controleer de ingevulde waarde.';
    };

    const clearError = (field) => {
        const errorId = field.id + '-error';
        const error = document.getElementById(errorId);
        if (error) error.remove();

        field.removeAttribute('aria-invalid');
        const descriptions = (field.getAttribute('aria-describedby') || '')
            .split(/\s+/)
            .filter((id) => id && id !== errorId);
        if (descriptions.length) {
            field.setAttribute('aria-describedby', descriptions.join(' '));
        } else {
            field.removeAttribute('aria-describedby');
        }
    };

    const showError = (field) => {
        clearError(field);
        const wrapper = field.closest('.ng-contact-field');
        if (!wrapper) return;

        const error = document.createElement('p');
        error.id = field.id + '-error';
        error.className = 'ng-contact-field-error';
        error.textContent = messageFor(field);
        error.setAttribute('aria-live', 'polite');
        wrapper.appendChild(error);

        field.setAttribute('aria-invalid', 'true');
        const existing = field.getAttribute('aria-describedby');
        field.setAttribute(
            'aria-describedby',
            [existing, error.id].filter(Boolean).join(' ')
        );
    };

    form.noValidate = true;

    requiredFields.forEach((field) => {
        const handleChange = () => {
            if (field.checkValidity()) {
                clearError(field);
            } else if (form.dataset.validationAttempted === 'true') {
                showError(field);
            }
        };
        field.addEventListener('input', handleChange);
        field.addEventListener('change', handleChange);
    });

    form.addEventListener('submit', (event) => {
        form.dataset.validationAttempted = 'true';
        let firstInvalid = null;

        requiredFields.forEach((field) => {
            if (field.checkValidity()) {
                clearError(field);
            } else {
                showError(field);
                if (!firstInvalid) firstInvalid = field;
            }
        });

        if (firstInvalid) {
            event.preventDefault();
            firstInvalid.focus();
        }
        // Valid forms submit through the existing WordPress PHP handler.
    });
});
