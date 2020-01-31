import {isValid, parse, parseISO} from 'date-fns';

function validateFields() {
    var ok = true;
    $('input, textarea, select').each(function() {
        ok = ok && this.reportValidity();
    });

    return ok;
}

export function dataToExcel(data, excel, sheet = 0) {

    console.log(data);
    data.forEach((row, i) => {
        Object.values(row).forEach((col, j) => {
            excel.set(sheet, j, i, col);
        });
    });

    return excel;
}

export function parseDateString(text) {
    let date = parseISO(text);

    if (!isValid(date)) {
        date = parse(text, 'dd.mm.yyyy', new Date());
    }

    console.log(date);

    return isValid(date) ? date : false;
}

window.validateFields = validateFields;
