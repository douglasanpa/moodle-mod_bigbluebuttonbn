<?php
/**
 * Language File
 *
 * Authors:
 *    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 *    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 *    Luciano Silva  (lucianoes [at] ufrgs [dt] br)
 *    Felipe Cecagno  (felipe [at] mconf [dt] org)
 *    
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2012 Blindside Networks
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['bbbduetimeoverstartingtime'] = 'O horário de encerramento desta atividade deve ser maior do que o horário de início';
$string['bbbdurationwarning'] = 'A duração máxima para esta sessão é %duration% minutos.';
$string['bbbfinished'] = 'Esta atividade encerrou.';
$string['bbbinprocess'] = 'Esta atividade está em andamento.';
$string['bbbnorecordings'] = 'Nenhuma gravação disponível, por favor, retorne mais tarde.';
$string['bbbnotavailableyet'] = 'Desculpe, esta sessão ainda não está disponível.';
$string['bbbrecordwarning'] = 'Esta sessão está sendo gravada.';
$string['bbburl'] = 'A URL de seu servidor Mconf deve terminar com /bigbluebutton/. (Esta URL padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['bigbluebuttonbn:join'] = 'Participar de uma webconferência';
$string['bigbluebuttonbn:moderate'] = 'Moderar uma webconferência';
$string['bigbluebuttonbn:addinstance'] = 'Adicionar uma nova webconferência';
$string['bigbluebuttonbn'] = 'Mconf Webconferência';
$string['bigbluebuttonbnfieldset'] = 'Exemplo de campo personalizado';
$string['bigbluebuttonbnintro'] = 'Introdução ao Mconf';
$string['bigbluebuttonbnSalt'] = 'Chave de segurança';
$string['bigbluebuttonbnDetectMobile'] = 'Detectar Acceso de Clientes Móveis';
$string['bigbluebuttonbnUrl'] = 'URL do servidor Mconf';
$string['bigbluebuttonbnWait'] = 'O usuário deve esperar';
$string['configsecuritysalt'] = 'Chave de segurança do servidor Mconf. (Esta chave padrão é de um servidor BigBlueButton de testes da Blindside Networks.)';
$string['detectmobile'] = 'Tentar detectar se a conferência está sendo acessada por um dispositivo móvel e redirecionar para o cliente móvel.';
$string['general_error_unable_connect'] = 'Não foi possível conectar. Por favor, verifique a URL do servidor Mconf e se o servidor está ativo.';
$string['index_confirm_end'] = 'Você gostaria de encerrar a webconferência?';
$string['index_disabled'] = 'desabilitado';
$string['index_enabled'] = 'habilitado';
$string['index_ending'] = 'Encerrando a webconferência ... por favor aguarde';
$string['index_error_checksum'] = 'Ocorreu um erro de checksum. Verifique se a chave de segurança do servidor está correta.';
$string['index_error_forciblyended'] = 'Não é possível entrar na webconferência pois ela foi encerrada manualmente.';
$string['index_error_unable_display'] = 'Não é possível exibir as webconferências. Por favor verifique a URL do servidor Mconf e se o servidor está ativo.';
$string['index_heading_actions'] = 'Ações';
$string['index_heading_group'] = 'Grupo';
$string['index_heading_moderator'] = 'Moderadores';
$string['index_heading_name'] = 'Sala';
$string['index_heading_recording'] = 'Gravação';
$string['index_heading_users'] = 'Usuários';
$string['index_heading_viewer'] = 'Participantes';
$string['index_heading'] = 'Salas Mconf';
$string['index_running'] = 'em execução';
$string['index_warning_adding_meeting'] = 'Não é possível atribuir um novo identificador de sala.';
$string['mod_form_block_general'] = 'Configurações gerais';
$string['mod_form_block_participants'] = 'Participantes';
$string['mod_form_block_record'] = 'Configurações de gravação';
$string['mod_form_block_schedule'] = 'Agendamento de sessões';
$string['mod_form_field_availabledate'] = 'Participação liberada';
$string['mod_form_field_description'] = 'Descrição da sessão a ser gravada';
$string['mod_form_field_description_help'] = "Uma descrição curta da gravação que será mostrada na lista de gravações. Pode ser diferente para cada sessão.";
$string['mod_form_field_duedate'] = 'Participação encerrada';
$string['mod_form_field_duration'] = 'Duração';
$string['mod_form_field_duration_help'] = 'A duração máxima define o período de tempo que a sala irá permanecer aberta desde a entrada do primeiro usuário. IMPORTANTE: utilize com cuidado, pois quando a duração máxima é atingida, a sala é fecahda automaticamente e todos os participantes são desconectados. Utilize o valor 0 para não definir duração máxima.';
$string['mod_form_field_limitusers'] = 'Limitar usuários';
$string['mod_form_field_limitusers_help'] = 'Número máximo de usuários permitidos em uma webconferência';
$string['mod_form_field_name'] = 'Nome da sala de webconferência';
$string['mod_form_field_newwindow'] = 'Abrir Mconf em uma nova janela';
$string['mod_form_field_record'] = 'Gravar';
$string['mod_form_field_voicebridge_help'] = 'Número da conferência de voz que os participantes podem utilizar para se conectar via SIP.';
$string['mod_form_field_voicebridge'] = 'Número da conferência de voz';
$string['mod_form_field_wait'] = 'Os alunos devem aguardar a entrada de um moderador';
$string['mod_form_field_allmoderators'] = "Permitir que todos participantes sejam moderadores";
$string['mod_form_field_participant_add'] = 'Adicionar participante';
$string['mod_form_field_participant_list'] = 'Lista de participantes';
$string['mod_form_field_participant_list_type_all'] = 'Todos usuários inscritos';
$string['mod_form_field_participant_list_type_user'] = 'Usuário';
$string['mod_form_field_participant_list_type_role'] = 'Função';
$string['mod_form_field_participant_list_text_as'] = 'como';
$string['mod_form_field_participant_list_action_add'] = 'Adicionar';
$string['mod_form_field_participant_list_action_remove'] = 'Remover';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderador';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Visualizador';
$string['mod_form_field_welcome_default'] = '<br>Seja bem-vindo à sala <b>%%CONFNAME%%</b>!<br><br>Para habilitar seu microfone, clique no ícone do headset (canto superior esquerdo). <b>Por favor, utilize um headset para não causar ruído para os demais participantes. Para uma melhor experiência, utilize rede cabeada sempre que possível.</b>';
$string['mod_form_field_welcome_help'] = 'Substitua a mensagem padrão configurada para o Mconf. A mensagem pode incluir palavras chave (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) que serão substituídas automaticamente, e também tags HTML como &lt;b&gt;...&lt;/b&gt; ou &lt;i&gt;...&lt;/i&gt;';
$string['mod_form_field_welcome'] = 'Mensagem de boas-vindas';
$string['modulename'] = 'Webconferência Mconf';
$string['modulenameplural'] = 'Webconferência Mconf';
$string['modulename_help'] = 'Webconferência Mconf permite que você crie a partir do Moodle salas de webconferência e especifique título, descrição, período de utilização, grupos e detalhes sobre a gravação da sessão.

IMPORTANTE: Para visualizar as gravações posteriormente adicione o recurso "Gravações Mconf" neste curso.';
$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['pluginadministration'] = 'Administração do Mconf';
$string['pluginname'] = 'Webconferência Mconf';
$string['serverhost'] = 'Nome do servidor';
$string['view_error_no_group_student'] = 'Você não está vinculado a um grupo. Por favor contate seu Professour ou o Suporte Pedagógico.';
$string['view_error_no_group_teacher'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos ou contate o Suporte Pedagógico.';
$string['view_error_no_group'] = 'Nenhum grupo foi configurado ainda. Por favor defina grupos antes de tentar participar da webconferência.';
$string['view_error_unable_join_student'] = 'Não foi possível contectar-se ao Mconf. Por favor contate seu Professor ou o Suporte Pedagógico.';
$string['view_error_unable_join_teacher'] = 'Não foi possível contectar-se ao Mconf. Por favor contate o Suporte Pedagógico.';
$string['view_error_unable_join'] = 'Não foi possível entrar na sala. Por favor, verifique a URL do servidor Mconf e se o servidor está ativo.';
$string['view_error_create'] = 'O servidor Mconf respondeu com uma mensagem de erro, a reunião não pode ser criada.';
$string['view_error_max_concurrent'] = 'O número máximo de sessões simultâneas foi alcançado.';
$string['view_groups_selection_join'] = 'Entrar';
$string['view_groups_selection'] = 'Selecione o grupo que você deseja participar e confirme';
$string['view_login_moderator'] = 'Entrando como moderador ...';
$string['view_login_viewer'] = 'Entrando como participante ...';
$string['view_noguests'] = 'A Webconferência Mconf não está aberta para convidados.';
$string['view_nojoin'] = 'Você não possui privilégios para participar desta sessão.';
$string['view_recording_list_actionbar_delete'] = 'Excluir';
$string['view_recording_list_actionbar_hide'] = 'Ocultar';
$string['view_recording_list_actionbar_show'] = 'Exibir';
$string['view_recording_list_actionbar'] = 'Ferramentas';
$string['view_recording_list_activity'] = 'Atividade';
$string['view_recording_list_course'] = 'Curso';
$string['view_recording_list_date'] = 'Data';
$string['view_recording_list_description'] = 'Descrição';
$string['view_recording_list_duration'] = 'Duração';
$string['view_recording_list_recording'] = 'Gravação';
$string['view_wait'] = 'A webconferência ainda não começou. Aguardando o moderador ...';

$string['event_activity_created'] = 'BigBlueButtonBN activity created';
$string['event_activity_viewed'] = 'BigBlueButtonBN activity viewed';
$string['event_activity_viewed_all'] = 'BigBlueButtonBN activity management viewed';
$string['event_activity_modified'] = 'BigBlueButtonBN activity modified';
$string['event_activity_deleted'] = 'BigBlueButtonBN activity deleted';
$string['event_meeting_created'] = 'BigBlueButtonBN meeting created';
$string['event_meeting_joined'] = 'BigBlueButtonBN meeting joined';
$string['event_meeting_left'] = 'BigBlueButtonBN meeting left';
$string['event_meeting_ended'] = 'BigBlueButtonBN meeting forcibly ended';

?>