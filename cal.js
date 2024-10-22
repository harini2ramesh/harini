// script.js
document.addEventListener('DOMContentLoaded', () => {
    const display = document.getElementById('display');
    let currentInput = '';
    let operator = '';
    let firstOperand = '';

    document.querySelectorAll('.btn.number').forEach(button => {
        button.addEventListener('click', () => {
            currentInput += button.getAttribute('data-num');
            display.textContent = currentInput;
        });
    });

    document.querySelectorAll('.btn.operator').forEach(button => {
        button.addEventListener('click', () => {
            if (currentInput === '') return;
            if (firstOperand === '') {
                firstOperand = currentInput;
                currentInput = '';
            }
            operator = button.getAttribute('data-op');
            display.textContent = `${firstOperand} ${operator}`;
        });
    });

    document.querySelector('.btn.special[data-action="clear"]').addEventListener('click', () => {
        currentInput = '';
        firstOperand = '';
        operator = '';
        display.textContent = '0';
    });

    document.querySelector('.btn.special[data-action="equals"]').addEventListener('click', () => {
        if (firstOperand === '' || currentInput === '' || operator === '') return;
        const result = evaluateExpression(firstOperand, operator, currentInput);
        display.textContent = result;
        firstOperand = result;
        currentInput = '';
        operator = '';
    });

    document.querySelector('.btn.special[data-action="decimal"]').addEventListener('click', () => {
        if (currentInput.includes('.')) return;
        currentInput += '.';
        display.textContent = currentInput;
    });

    function evaluateExpression(a, op, b) {
        const numA = parseFloat(a);
        const numB = parseFloat(b);
        switch (op) {
            case '+': return numA + numB;
            case '-': return numA - numB;
            case '*': return numA * numB;
            case '/': return numA / numB;
            default: return '';
        }
    }
});
