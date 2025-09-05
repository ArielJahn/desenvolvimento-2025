import { CriaOperacoes } from './fabrica/CriaOperacoes.js';
import { ComandoCalculadora } from './comando/ComandoCalculadora.js';

export class Calculadora {
   constructor() {
      this.monitora = [];
   }

   /**
    * @param {string} operador
    * @param {number} a
    * @param {number} b
    * @returns {number}
    */
   executar(operador, a, b) {
      try {
         const instaciaOperacao = CriaOperacoes.criar(operador);

         const comando = new ComandoCalculadora(instaciaOperacao, a, b);

         const retorno = comando.executar();
         
         this.monitora.push({ comando, retorno, timestamp: new Date() });

         return retorno;
      } catch (error) {
         console.error(`Erro no cálculo: ${error.message}`);
         return null;
      }
   }

   /**
    * @returns {Array}
    */
   getMonitoracao() {
      return this.monitora;
   }
}