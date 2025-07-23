Media to Media JCE (mediatomediajce)

Plugin de sistema para Joomla que converte automaticamente os campos de mídia padrão do Joomla (type="media") para o campo de mídia do editor JCE (type="mediajce").

Sobre o Plugin

Este plugin foi desenvolvido para facilitar a vida de desenvolvedores e administradores de sites Joomla que utilizam o editor JCE. Ao ser ativado, ele intercepta a renderização de formulários e substitui todos os campos de seleção de mídia nativos pelo gerenciador de arquivos do JCE, que é mais robusto e amigável.

A principal vantagem é poder usar a interface do JCE para selecionar não apenas imagens, mas qualquer tipo de arquivo, em qualquer componente que utilize os campos de mídia padrão do Joomla.

Funcionalidades

    Substituição Automática: Converte todos os campos do tipo media para mediajce sem necessidade de alteração manual no código ou nos formulários XML.

    Integração com JCE: Utiliza o gerenciador de arquivos do JCE, oferecendo uma melhor experiência de usuário.

    Suporte a Todos os Tipos de Arquivo: Por padrão, a substituição permite a seleção de qualquer tipo de arquivo, e não apenas imagens (mediatype="files").

    Plug and Play: Basta instalar e ativar. Nenhuma configuração adicional é necessária.

    Diretório Padrão: Define o diretório media como padrão para uploads caso nenhum outro seja especificado no campo original.

Requisitos

    Joomla: Versão 3.x, 4.x ou superior.

    JCE Editor: O componente JCE Editor deve estar instalado e ativado em seu site, pois o campo mediajce faz parte dele.

Instalação

    Baixe a versão mais recente do plugin na página de Releases.

    Acesse o painel de administração do seu site Joomla.

    Vá para Sistema -> Instalar -> Extensões.

    Arraste o arquivo .zip do plugin para a área de upload ou use o botão "Navegar" para localizá-lo.

    Após a instalação, vá para Sistema -> Gerenciar -> Plugins.

    Procure por "System - Media to Media JCE".

    Ative o plugin.

A partir desse momento, todos os campos de mídia serão automaticamente substituídos.

Como Funciona

O plugin utiliza o evento onContentPrepareForm do Joomla para manipular os formulários antes de serem exibidos. Ele analisa o XML do formulário e altera o atributo type de "media" para "mediajce" em todos os campos encontrados.

Autor e Licença

    Autor: Ponto Mega

    Contato: contato@pontomega.com.br

    Website: https://www.pontomega.com.br

    Licença: GNU General Public License v2 ou posterior
