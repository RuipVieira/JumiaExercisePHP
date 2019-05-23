function sort() {
    var country = $('countrySort');
    var state = $('stateSort');
    var table = $('dataContainer');

    resetTable(table);

    if (country.options[country.selectedIndex].value !== '0') {
        if (state.options[state.selectedIndex].value === '0') {
            for (var i = 0, row; row = table.rows[i]; i++) {
                if (country.options[country.selectedIndex].innerText === row.cells[0].innerText) {
                    row.style.display = '';
                }
                //hides all other numbers
                else row.style.display = 'none';
            }
        } else {
            for (var i = 0, row; row = table.rows[i]; i++) {
                if (country.options[country.selectedIndex].innerText === row.cells[0].innerText
                    && state.options[state.selectedIndex].value === row.cells[1].innerText) {
                    row.style.display = '';
                }
                //hides all other numbers
                else row.style.display = 'none';
            }
        }
    } else {
        for (var i = 0, row; row = table.rows[i]; i++) {
            if (state.options[state.selectedIndex].value === row.cells[1].innerText) {
                row.style.display = '';
            }
            //hides all other numbers
            else row.style.display = 'none';
        }
    }
}


function $(id) {
    return document.getElementById(id);
}

function resetTable(table) {
    for (var i = 0, row; row = table.rows[i]; i++) {
        row.style.display = '';
    }

}