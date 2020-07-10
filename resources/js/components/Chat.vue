<template>
  <div class="col-md-12">
    <div class="card boxChat">
      <div class="card-body msgBox clearfix">
        <div class="clearfix" v-html="conversa"></div>
        <span v-if="habilitarBotaoEnvio === false">Robo Silvia está digitando....</span>
      </div>

      <div class="card-footer">
        <div class="clearfix">
          <div class="switch-field" v-for="(msg,indice) in mensagens" :key="indice">
            <input
              :id="indice"
              v-model="mensagemSelecionada"
              name="menssagem"
              type="radio"
              :value="indice"
            />
            <label :for="indice">{{ msg }}</label>
          </div>
        </div>
        <div style=" float:left; width:100% !important; display:block; ">
          <button
            v-if="habilitarBotaoEnvio === true"
            type="button"
            @click="enviarMsg"
            class="btn btn-lg btn-primary"
          >ENVIAR</button>

          <button v-else disabled type="button" class="btn btn-lg btn-primary">ENVIAR</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["dataUser"],

  data() {
    return {
      habilitarBotaoEnvio: true,
      user: null,
      conversa: "",
      mensagens: [
        "O que vocês fazem ?",
        "Qual o site de vocês?",
        "Você possuem whatsapp ?"
      ],

      mensagemSelecionada: null
    };
  },
  mounted() {
    this.user = this.dataUser;
  },

  methods: {
    enviarMsg() {
      let data = new Date();
      let data_formatada =
        data.toLocaleDateString("pt-BR") +
        " " +
        data.getHours() +
        ":" +
        data.getMinutes();
        
      const msgEnviadaUser = `<div class="alert alert-info float-right" style="width:60%;">
            <span>
             ${this.user.name}
              <small>${data_formatada}</small>
            </span>
            <p>${this.mensagens[this.mensagemSelecionada]}</p>
          </div>`;

      let msgRespRobo = "";
      if (this.mensagemSelecionada == 0) {
        msgRespRobo = `<div class="alert alert-warning float-left" style="width:60%;">
            <span>
             Robo Silvia
              <small>${data_formatada}</small>
            </span>
            <p>Atualmente nós trabalhamos com desenvolvimento de websities, sistemas, ferramentas para automatizar a suas ideias e também alavancar seus projetos.</p>
          </div>`;
      } else if (this.mensagemSelecionada == 1) {
        msgRespRobo = `<div class="alert alert-warning float-left" style="width:60%;">
            <span>
             Robo Silvia
              <small>${data_formatada}</small>
            </span>
            <p>Nosso site é www.naoexistesite.com.br, lá você poderá ver mais sobre nossos trabalhos e ideias,  e também poderá enviar pedidos de orçamento com mais detalhes.</p>
          </div>`;
      } else {
        msgRespRobo = `<div class="alert alert-warning float-left" style="width:60%;">
            <span>
             Robo Silvia
              <small>${data_formatada}</small>
            </span>
            <p>Olha, fique avontade para nós enviar mensagens, fotos, vídeos, correntes etc.</p>
            <p>Nós gostamos de conversar.</p>
            <p>(11) 99999-9999</p>
          </div>`;
      }

      this.conversa = this.conversa + msgEnviadaUser;
      this.habilitarBotaoEnvio = false;

      setTimeout(() => {
        this.conversa = this.conversa + msgRespRobo;
        this.habilitarBotaoEnvio = true;
      }, 2350);

    }
  }
};
</script>
