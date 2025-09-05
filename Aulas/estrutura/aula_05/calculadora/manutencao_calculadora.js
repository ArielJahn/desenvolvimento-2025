import { Calculadora } from './src/Calculadora.js';

class ManutencaoCalculadora extends Calculadora {

   static oCampos;

   static getInstance() {
      if (!ManutencaoCalculadora.instance) {
         ManutencaoCalculadora.instance = new ManutencaoCalculadora();
      }
      console.log(ManutencaoCalculadora.instance)
      return ManutencaoCalculadora.instance;
   }

   OnLoad() {
      this.mapearCampos();
      this.setEventos();
   }

   mapearCampos() {
      this.oCampos = {
         parametroA : document.getElementById('a'),
         parametroB : document.getElementById('b'),
         operador   : document.getElementById('op'),
         calcular   : document.getElementById('calc'),
         deletar    : document.getElementById('clear'),
         resultado  : document.getElementById('result'),
         form       : document.getElementById('calcForm')
      };
   }

   setEventos() {
      this.setEventoBotaoCalcular();
      this.setEventoBotaoLimpar();
   }

   setEventoBotaoCalcular() {
      this.oCampos.calcular.addEventListener('click', () => {
         this.onClickCalcular();
      });
   }

   setEventoBotaoLimpar() {
      this.oCampos.deletar.addEventListener('click', () => {
         this.limparCampos();
      });
   }

   getObjetoValores() {
      return {
         operador: this.oCampos.operador.value,
         parametroA: this.oCampos.parametroA.value,
         parametroB: this.oCampos.parametroB.value
      }
   }

   onClickCalcular() {
      const { operador, parametroA, parametroB } = this.getObjetoValores();
      const oRetorno = this.executar(operador, parametroA, parametroB);
      console.log(oRetorno)
      this.oCampos.resultado.innerHTML = 'Resultado: ' + oRetorno;
   }

   limparCampos() {
      this.oCampos.form.reset();
      this.oCampos.resultado.innerHTML = 'Resultado: ';
   }

}

document.addEventListener('DOMContentLoaded', () => {
   ManutencaoCalculadora.getInstance().OnLoad();
});
