import { Somar } from '../operacoes/Somar.js';
import { Subtrair } from '../operacoes/Subtrair.js';
import { Multiplicar } from '../operacoes/Multiplicar.js';
import { Dividir } from '../operacoes/Dividir.js';

/** @type {Record<string, typeof Somar|typeof Subtrair|typeof Multiplicar|typeof Dividir>} */
const operacoes = {
    '+': Somar,
    '-': Subtrair,
    '*': Multiplicar,
    '/': Dividir,
};

export class CriaOperacoes {
    /**
     * @param {string} operador
     * @returns {Adicionar|Subtrair|Multiplicar|Dividir}
     */
    static criar(operador) {
        const classeOperadora = operacoes[operador];

        if (!classeOperadora) {
            throw new Error(`Operação invalida: ${operador}`);
        }

        return new classeOperadora();
    }
}