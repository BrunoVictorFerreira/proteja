(function($) {

    var locales = {
        'pt-br': {
            'solucoes': { message: 'Soluções' },
            'servicos' :  {message : 'Serviços'},
            'servicosTecnologia' : {message: 'Tecnologia e inovação'},
            'servicosConsultorias' : {message : 'Consultorias'},
            'servicosSetorPublico' : {message: 'Setor Público'},
            'segmentos' : {message : 'Segmentos de Atuação'},
            'parceiros' : {message : 'Parceiros'},
            'fianto' : {message : 'A Fianto'},
            'blog' : {message : 'Blog'},
            'contato' : {message : 'Contato'},
            'contatoFaleConosco' : {message : 'Fale Conosco'},
            'contatoTrabalheConosco' : {message : 'Trabalhe Conosco'},
            'contatoDuvidas' : {message : 'Dúvidas Frequentes'}

        },
        'es' : {
            'solucoes': { message: 'Soluciones' },
            'servicos' :  {message : 'Servicios'},
            'servicosTecnologia' : {message: 'Tecnología e innovación'},
            'servicosConsultorias' : {message : 'Consultorias'},
            'servicosSetorPublico' : {message: 'Sector publico'},
            'servicosCaptacao' : {message: 'Sector publico'},
            'segmentos' : {message : 'Segmentos comerciales'},
            'parceiros' : {message : 'Socios'},
            'fianto' : {message : 'Un Fianto'},
            'blog' : {message : 'Blog'},
            'contato' : {message : 'Contacto'},
            'contatoFaleConosco' : {message : 'Hable con nosotros'},
            'contatoTrabalheConosco' : {message : 'Trabaja con nosotros'},
            'contatoDuvidas' : {message : 'Preguntas frecuentes'}
        },
        'en': {
            'solucoes': { message: 'Soluctions' },
            'servicos' :  {message : 'Services'},
            'servicosTecnologia' : {message: 'Technology and Inovation'},
            'servicosConsultorias' : {message : 'Consultancies'},
            'servicosSetorPublico' : {message: 'Public sector'},
            'segmentos' : {message : 'Operating segments'},
            'parceiros' : {message : 'Partners'},
            'fianto' : {message : 'The Fianto'},
            'blog' : {message : 'Blog'},
            'contato' : {message : 'Contact'},
            'contatoFaleConosco' : {message : 'Contact us'},
            'contatoTrabalheConosco' : {message : 'Work whit us'},
            'contatoDuvidas' : {message : 'Common Questions'}
        }
    };

    function translate(id, locale) {
        var l = locales[locale];

        if (!l) {
            l = locale.en;
        }

        return l[id];
    }

    $.fn.translate = function(locale) {
        var elements = this.find('[data-translation-id]');

        $.each(elements, function () {
            var id = $(this).data('translation-id'),
                t = translate(id, locale);

            if (t.isBodyHTML) {
                $(this).html(t.message);
            } else {
                $(this).text(t.message);
            }
        });
    };

}(jQuery));
