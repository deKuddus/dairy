/**
 * Check Empty String
 * @param value
 * @returns {boolean}
 */
function isEmpty(value) {
    return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}

/**
 * Print the given div using printThis().
 * @param divId
 */
function printNow(divId) {
    $('#' + divId).printThis({
        importStyle: true,
        loadCSS: '/css/printstyles.css'
    });
}