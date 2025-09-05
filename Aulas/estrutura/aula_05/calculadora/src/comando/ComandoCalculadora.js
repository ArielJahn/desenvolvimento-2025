/**
 * Comando que encapsula uma operação e seus operandos.
 */
export class ComandoCalculadora {
   /**
    * @param {Somar|Subtrair|Multiplicar|Dividir} operador
    * @param {number} paramA
    * @param {number} paramB
    */
   constructor(operador, paramA, paramB) {
      this.operador = operador;
      this.paramA = Number(paramA);
      this.paramB = Number(paramB);
   }

   /**
    * Executa o comando.
    * @returns {number} O resultado da operação.
    */
   executar() {
      return this.operador.executar(this.paramA, this.paramB);
   }
}
