<?php

return [
    /*
      |----------------------------------------------------------------------------------------
      | Authentication Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all authentication related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */

    /*
      |--------------------------------------
      |   Error
      |--------------------------------------
     */

    'success'        => 'Successo',
    'fails'          => 'Fallito',
    'alert'          => 'Allerta',
    'required-error' => 'Per favore inserire i campi richiesti',
    'invalid'        => 'Id Utente o Password sbagliate',
    /*
      |--------------------------------------
      |   Login Page
      |--------------------------------------
     */
    'Login_to_start_your_session' => 'Login per incominciare la tua sessione',
    'login'                       => 'Login',
    'remember'                    => 'Ricordami',
    'signmein'                    => 'Segnami',
    'iforgot'                     => 'Ho dimenticato la Password',
    'email_address'               => 'Indirizzo E-Mail',
    'password'                    => 'Password',
    'woops'                       => 'Whoops!',
    'theirisproblem'              => 'Ci sono problemi con ciò che hai inserito.',
    'login'                       => 'Login',
    'e-mail'                      => 'E-mail',
    'reg_new_member'              => 'Registra una nuova associazione',
    /*
      |--------------------------------------
      |   Register Page
      |--------------------------------------
     */
    'registration'                => 'Registrazione',
    'full_name'                   => 'Nome completo',
    'firstname'                   => 'Nome',
    'lastname'                    => 'Cognome',
    'profilepicture'              => 'Foto del Profilo',
    'oldpassword'                 => 'Vecchia Password',
    'newpassword'                 => 'Nuova Password',
    'retype_password'             => 'Reinserisci Password',
    'i_agree_to_the'              => 'Concordo con',
    'terms'                       => 'termini',
    'register'                    => 'Registra',
    'i_already_have_a_membership' => 'Sono già associato',
    /*
      |--------------------------------------
      |   Reset Password Page
      |--------------------------------------
     */
    'reset_password' => 'Resetta la Password',
    /*
      |--------------------------------------
      |   Forgot Password Page
      |--------------------------------------
     */
    'i_know_my_password'            => 'Conosco la mia password',
    'recover_passord'               => 'Recupera Password',
    'send_password_reset_link'      => 'Invia Link per il Reset della password',
    'enter_email_to_reset_password' => 'Inserisci E-mail per il reset della password',
    'link'                          => 'Link',
    /*
      |----------------------------------------------------------------------------------------
      | Emails Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Emails related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'admin_panel' => 'Panello Amministrativo',
    /*
      |--------------------------------------
      |  Emails Create Page
      |--------------------------------------
     */
    'emails'                         => 'Emails',
    'incoming_emails'                => 'Emails In Arrivo',
    'reuired_authentication'         => 'Autenticazione Richiesta',
    'fetching_email_via_imap'        => 'Caricamento Email via IMAP',
    'create_email'                   => 'Crea Email',
    'email_address'                  => 'Indirizzo Email',
    'email_name'                     => 'Nome Email',
    'help_topic'                     => 'Argomento della Guida',
    'auto_response'                  => 'Auto Risposta',
    'host_name'                      => 'Nome Host',
    'port_number'                    => 'Numero Porta',
    'mail_box_protocol'              => 'Protocollo di Casella Mail',
    'authentication_required'        => 'Autenticazione Richiesta',
    'yes'                            => 'Si',
    'no'                             => 'No',
    'header_spoofing'                => 'Header Spoofing',
    'allow_for_this_email'           => 'Permetti per questa Email',
    'imap_config'                    => 'Configurazione IMAP',
    'email_information_and_settings' => 'Informazioni e settaggi Email',
    'incoming_email_information'     => 'Informazioni Email in entrata',
    'outgoing_email_information'     => 'Informazioni Email in uscita',
    'new_ticket_settings'            => 'Settaggi Nuovo Ticket',
    'protocol'                       => 'Protocollo',
    'fetching_protocol'              => 'Caricando Protocol',
    'transfer_protocol'              => 'Trasferendo Protocol',
    'from_name'                      => 'Da Nome',
    'add_an_email'                   => 'Aggiungi una Email',
    'edit_an_email'                  => 'Modifica una Email',
    'disable_for_this_email_address' => 'Disabilita per questo indirizzo Email ',
    /*
      |--------------------------------------
      |  Ban Emails Create Page
      |--------------------------------------
     */
    'ban_lists'  => 'Lista Ban',
    'ban_email'  => 'Email Ban',
    'banlists'   => 'Liste Ban',
    'ban_status' => 'Status Ban',
    /*
      |--------------------------------------
      |  Templates Index Page
      |--------------------------------------
     */
    'templates'       => 'Templates',
    'template_set'    => 'Template Sets',
    'create_template' => 'Crea Template',
    'edit_template'   => 'Modifica Template',
    'in_use'          => 'In Uso',
    //Template Description
    'Create ticket agent'       => 'Email di notifica che è inviata a Agente e Admin quando il ticket è creato',
    'Assign ticket'             => 'Ticket assegnato ad un agente',
    'Create ticket'             => 'Mail inviata al cliente per conferma creazione ticket',
    'Check ticket'              => 'Se un cliente vuole controllare attraverso il portale clienti un link verrà inviato al cliente.Questo link è per il cliente per vedere i dettagli del ticket co il suo numero senza loggarsi nel sistema',
    'Ticket reply agent'        => 'Una notifica è inviata ad un agente una volta che il cliente risponde al ticket',
    'Registration notification' => 'Password e nome utente sono inviati in email alla prima registrazione',
    'Reset password'            => 'Email con il link per il reset della Password',
    'Error report'              => 'Report Errori',
    'Ticket creation'           => 'Prima notifica inviata dal sistema sulla creazione del ticket al cliente',
    'Ticket reply'              => 'Una risposta fatta da un agente sul ticket,una notifica è inviata al cliente e ai collaboratori',
    'Close ticket'              => 'Mail inviata al cliente per la chiusura di un ticket',
    'Create ticket by agent'    => 'Un agente crea un ticket per il cliente a nome del cliente',
    /*
      |--------------------------------------
      |  Templates Create Page
      |--------------------------------------
     */
    'template_set_to_clone' => 'Template set da clonare',
    'language'              => 'Lingua',
    /*
      |--------------------------------------
      |  Diagnostics Page
      |--------------------------------------
     */
    'diagnostics' => 'Diagnostici',
    'from'        => 'Da',
    'to'          => 'A',
    'subject'     => 'Soggetto',
    'message'     => 'Messaggio',
    'send'        => 'Invia',
    /*
      |----------------------------------------------------------------------------------------
      | Settings Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Setting related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */

    /*
      |--------------------------------------
      |   Company Settings Page
      |--------------------------------------
     */
    'company' => 'Compagnia',
    'website' => 'Sito Web',
    'phone'   => 'Telefono',
    'address' => 'Indirizzo',
    'landing' => 'Landing Page',
    'offline' => 'Offline Page',
    'thank'   => 'Thank Page',
    'logo'    => 'Logo',
    'save'    => 'Salva',
    /*
      |--------------------------------------
      |   System Settings Page
      |--------------------------------------
     */
    'system'                => 'Sistema',
    'online'                => 'Online',
    'offline'               => 'Offline',
    'name/title'            => 'Nome/Titolo',
    'pagesize'              => 'Grandezza Pagina',
    'url'                   => 'URL',
    'default_department'    => 'Dipartimento di Default',
    'loglevel'              => 'Livello Log',
    'purglog'               => 'Ripulisci Logs',
    'nameformat'            => 'Formattazione nome',
    'timeformat'            => 'Formato Ora',
    'date'                  => 'Data',
    'dateformat'            => 'Formato Data',
    'date_time'             => 'Formato Data e Ora',
    'day_date_time'         => 'Formato Giorno,Data e Ora',
    'timezone'              => 'Fuso orario di default',
    'api'                   => 'Api',
    'api_key'               => 'Chiave Api',
    'api_key_mandatory'     => 'Chiave Api obbligatoria',
    'api_configurations'    => 'Configurazioni Api',
    'generate_key'          => 'Genera chiave',
    /*
      |--------------------------------------
      |   Email Settings Page
      |--------------------------------------
     */
    'email'                               => 'Email',
    'default_template'                    => 'Template Set di Default:',
    'default_system_email'                => 'Sistema Email di Default:',
    'default_alert_email'                 => 'Allerta Email di Default:',
    'admin_email'                         => 'indirizzo Email Amministratori:',
    'email_fetch'                         => 'Caricamento Email:',
    'enable'                              => 'Attiva',
    'default_MTA'                         => 'MTA di Default',
    'fetch_auto-corn'                     => 'Carica con auto-cron',
    'strip_quoted_reply'                  => 'Rimuovi Citazioni nella Risposta',
    'reply_separator'                     => 'Tag Separatore nella Risposta',
    'accept_all_email'                    => 'Accetta Tutte le Emails',
    'accept_email_unknown'                => 'Accetta email da utenti sconosciuti',
    'accept_email_collab'                 => 'Accetta Email Da Collaboratori',
    'automatically_and_collab_from_email' => 'Aggiungi automaticamente collaboratori dai campi email',
    'default_alert_email'                 => 'Allerta Email di Default',
    'attachments'                         => 'Allegati',
    'email_attahment_user'                => 'Email attachments to the user',
    'cron_notification'                   => 'Attiva Notifica cron',
    /*
      |--------------------------------------
      |   Ticket Settings Page
      |--------------------------------------
     */
    'ticket'                             => 'Ticket',
    'default_ticket_number_format'       => 'Default Ticket Number Format',
    'default_ticket_number_sequence'     => 'Default Ticket Number Sequence',
    'default_status'                     => 'Default Status',
    'default_priority'                   => 'Default Priority',
    'default_sla'                        => 'Default SLA',
    'default_help_topic'                 => 'Default Help Topic',
    'maximum_open_tickets'               => 'Maximum Open Tickets',
    'agent_collision_avoidance_duration' => 'Agent Collision Avoidance Duration',
    'human_verification'                 => 'Human Verification',
    'claim_on_response'                  => 'Claim on Response',
    'assigned_tickets'                   => 'Assigned Tickets',
    'answered_tickets'                   => 'Answered Tickets',
    'agent_identity_masking'             => 'Agent Identity Masking',
    'enable_HTML_ticket_thread'          => 'Enable HTML Ticket Thread',
    'allow_client_updates'               => 'Allow Client Updates',
    /*
      |--------------------------------------
      |   Access Settings Page
      |--------------------------------------
     */
    'access'                                           => 'Accesso',
    'expiration_policy'                                => 'Policy Scadenza Password',
    'allow_password_resets'                            => 'Permetti Password Reset',
    'reset_token_expiration'                           => 'Resetta Scadenza Token',
    'agent_session_timeout'                            => 'Timeout Sessione Agente',
    'bind_agent_session_IP'                            => 'Lega Sessione Agente a IP',
    'registration_required'                            => 'Registrazione Richiesta',
    'require_registration_and_login_to_create_tickets' => 'Richiede registrazione e login per creare tickets',
    'registration_method'                              => 'metodo di Registrazione',
    'user_session_timeout'                             => 'Timeout Sessione Utente',
    'client_quick_access'                              => 'Accesso Rapido per Cliente',
    /*
      |--------------------------------------
      |   Auto-Response Settings Page
      |--------------------------------------
     */
    'auto_responce'                 => 'Auto Risposta',
    'new_ticket'                    => 'Nuovo Ticket',
    'new_ticket_by_agent'           => 'Nuovo Ticket per Agente',
    'new_message'                   => 'Nuovo Messaggio',
    'submitter'                     => 'Inviato da : ',
    'send_receipt_confirmation'     => 'Invia ricevuta Conferma',
    'participants'                  => 'Partecipanti : ',
    'send_new_activity_notice'      => 'Invia nuova notifica attività',
    'overlimit_notice'              => 'Overlimit Notice',
    'email_attachments_to_the_user' => 'Invia in email allegati ad utente',
    /*
      |--------------------------------------
      |   Alert & Notice Settings Page
      |--------------------------------------
     */
    'disable'                                               => 'Disabilita',
    'admin_email_2'                                         => 'Email Amministratore',
    'alert_notices'                                         => 'Allerte & Notifiche',
    'new_ticket_alert'                                      => 'Allerta Nuovo Ticket',
    'department_manager'                                    => 'Manager Dipartimento',
    'department_members'                                    => 'Componenti del Dipartimento',
    'organization_account_manager'                          => 'Account Manager Organizzazione',
    'new_message_alert'                                     => 'Allerta Nuovo Messaggio',
    'last_respondent'                                       => 'Ultimo a Rispondere',
    'assigned_agent_team'                                   => 'Agente / Team Assegnato',
    'new_internal_note_alert'                               => 'Allerta Nuova Nota Interna',
    'ticket_assignment_alert'                               => 'Allerta Assegnamento Ticket',
    'team_lead'                                             => 'Leader del Team',
    'team_members'                                          => 'Componenti del Team',
    'ticket_transfer_alert'                                 => 'Allerta Trasferimento Ticket',
    'overdue_ticket_alert'                                  => 'Overdue Ticket Alert ',
    'system_alerts'                                         => 'Allerta di Sistema',
    'system_errors'                                         => 'Errori di Sistema',
    'SQL_errors'                                            => 'Errori SQL',
    'excessive_failed_login_attempts'                       => 'Tentativi di login falliti eccessivi',
    'system_error_reports'                                  => 'Rapporti di errori Sistema',
    'Send_app_crash_reports_to_help_Ladybird_improve_Faveo' => 'Invia segnalazioni di crash per aiutare Ladybird per migliorare Faveo',
    /*
      |------------------------------------------------
      |Language page
      |------------------------------------------------
     */
    'default'            => 'default',
    'iso-code'           => 'ISO-CODE',
    'download'           => 'Scarica',
    'upload_file'        => 'Carica un File',
    'enter_iso-code'     => 'Inserisci ISO-CODE',
    'eg.'                => 'Esempio',
    'for'                => 'per',
    'english'            => 'English',
    'language-name'      => 'Nome lingua',
    'file'               => 'File',
    'read-more'          => 'Leggi di più.',
    'enable_lang'        => 'Attivalo.',
    'add-lang-package'   => 'Aggiungi nuovo pacchetto lingua',
    'package_exist'      => 'Pacchetto già esistente.',
    'iso-code-error'     => 'Errore nel codice iso. inserire codice corretto.',
    'zipp-error'         => 'Errore nel file zip. Lo zip deve contenere solo file lingua php.',
    'upload-success'     => 'Caricato con successo.',
    'file-error'         => 'Errore nel file file non valido.',
    'delete-success'     => 'Pacchetto Lingua cancellato con successo.',
    'lang-doesnot-exist' => 'Pacchetto Lingua non esistente.',
    'active-lang-error'  => 'Pacchetto Lingua non cancellabile quando attivo.',
    'language-error'     => 'Pacchetto Lingua non trovabile nella cartella lingua.',
    'lang-fallback-lang' => 'Cannot delete system\'s defualt fallback language',
    /*
      |----------------------------------------------------------------------------------------
      | Manage Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Manage related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'manage' => 'gestione',
    /*
      |--------------------------------------
      |  Help Topic index Page
      |--------------------------------------
     */
    'help_topics'       => 'Help Topics',
    'topic'             => 'Argomento',
    'type'              => 'Tipo',
    'priority'          => 'Priorità',
    'last_updated'      => 'Ultimo aggiornamento',
    'create_help_topic' => 'Crea Argomento Guida',
    'action'            => 'Azione',
    /*
      |--------------------------------------
      |  Help Topic Create Page
      |--------------------------------------
     */
    'active'               => 'Attivo',
    'disabled'             => 'Disabilitato',
    'public'               => 'Pubblico',
    'private'              => 'Privato',
    'parent_topic'         => 'Argomento principale',
    'Custom_form'          => 'Form Personalizzato',
    'SLA_plan'             => 'SLA Plan',
    'auto_assign'          => 'Auto assegna',
    'auto_respons'         => 'Auto Risposta',
    'ticket_number_format' => 'Formato numero Ticket',
    'system_default'       => 'Default di Sistema',
    'custom'               => 'Personalizzato',
    'internal_notes'       => 'Note Interne',
    /*
      |--------------------------------------
      |  SLA plan Index Page
      |--------------------------------------
     */
    'sla_plans'    => 'SLA Plans',
    'create_SLA'   => 'Create a SLA',
    'grace_period' => 'Grace Period',
    'added_date'   => 'Data Aggiunta',
    /*
      |--------------------------------------
      |  SLA plan Create Page
      |--------------------------------------
     */
    'transient'            => 'Transient',
    'ticket_overdue_alert' => 'Ticket Overdue Alerts',
    /*
      |--------------------------------------
      |  Form Create Page
      |--------------------------------------
     */
    'title'                                 => 'Titolo',
    'instruction'                           => 'Istruzione',
    'label'                                 => 'Etichetta',
    'visibility'                            => 'Visibilità',
    'variable'                              => 'Variabile',
    'create_form'                           => 'Crea Form',
    'forms'                                 => 'Forms',
    'form_name'                             => 'Nome del Form',
    'view_this_form'                        => 'Vedi questo Form',
    'delete_from'                           => 'Cancella Form',
    'are_you_sure_you_want_to_delete'       => 'Sicuro di voler Cancellare',
    'close'                                 => 'Chiudi',
    'instructions'                          => 'Istruzioni',
    'instructions_on_creating_form'         => "Seleziona il tipo di campo che vuoi aggiungere al form sottostante e clicca sul menu a cascata 'Tipo'. Non dimenticare di settare le opzioni del campo se il tipo è selezionato,checkbox radio...Separate ogni opzione con una virgola . Dopo aver finito di creare il form, potete salvare il form cliccando il pulsante Salva Form",
    'form_properties'                       => 'Proprietà Form',
    'adding_fields'                         => 'Aggiungendo Campi',
    'click_add_fields_button_to_add_fields' => "Clicca il pulsante <b>'Aggiungi Campi'</b> per aggiungere campi",
    'add_fields'                            => 'Aggiungi Campi',
    'save_form'                             => 'Salva Form',
    'label'                                 => 'Etichetta',
    'name'                                  => 'Nome',
    'type'                                  => 'Tipo',
    'values(selected_fields)'               => 'Valori(Campi Selezionati)',
    'required'                              => 'Richiesto',
    'Action'                                => 'Azione',
    'remove'                                => 'Rimuovi',
    /*
      |----------------------------------------------------------------------------------------
      | Theme Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Theme related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'themes' => 'Temi',
    /*
      |--------------------------------------
      |  Footer Pages
      |--------------------------------------
     */
    'footer'  => 'Footer',
    'footer1' => 'Footer1',
    'footer2' => 'Footer2',
    'footer3' => 'Footer3',
    'footer4' => 'Footer4',
     /*
      |--------------------------------------
      |  Custom alert box
      |--------------------------------------
     */
    'ok'                     => 'Ok',
    'cancel'                 => 'Cancella',
    'select-ticket'          => 'Per favore seleziona tickets.',
    'confirm'                => 'Sei sicuro?',
    'delete-tickets'         => 'Cancella Tickets',
    'close-tickets'          => 'Chiudi Tickets',
    'open-tickets'           => 'Apri Tickets',

    /*
      |----------------------------------------------------------------------------------------
      | Staff Pages [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Staff related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'are_you_sure' => 'Are you sure',
    'staffs'       => 'Staffs',
    'name'         => 'Nome',
    'user_name'    => 'Nome Utente',
    'status'       => 'Status',
    'group'        => 'Gruppo',
    'department'   => 'Dipartimento',
    'created'      => 'Creato',
    'lastlogin'    => 'Ultimo Login',
    'createagent'  => 'Crea Un Agente',
    'delete'       => 'Cancella',
    'agents'       => 'Agenti',
    'create'       => 'Crea',
    'edit'         => 'modifica',
    'departments'  => 'Dipartimenti',
    'groups'       => 'Gruppi',
    /*
      |--------------------------------------
      |  Staff Create Page
      |--------------------------------------
     */
    'create_agent'           => 'Crea Agente',
    'first_name'             => 'Nome',
    'last_name'              => 'Cognome',
    'mobile_number'          => 'Numero Mobile',
    'agent_signature'        => 'Firma Agente',
    'account_status_setting' => 'Status Account & Settaggi',
    'account_type'           => 'Tipo Account',
    'admin'                  => 'Admin',
    'agent'                  => 'Agente',
    'account_status'         => 'Status Account',
    'locked'                 => 'Bloccato',
    'assigned_group'         => 'Gruppo Assegnato',
    'primary_department'     => 'Dipartimento Principale',
    'agent_time_zone'        => 'Agent Time Zone',
    'day_light_saving'       => 'Day Light Saving',
    'limit_access'           => 'Limita Accesso',
    'directory_listing'      => 'Directory Listing',
    'vocation_mode'          => 'Vocation Mode',
    'assigned_team'          => 'Team Assegnato',
    /*
      |--------------------------------------
      |  Department Create Page
      |--------------------------------------
     */
    'create_department'                                => 'Crea Dipartimento',
    'manager'                                          => 'Manager',
    'ticket_assignment'                                => 'Assegnamento Ticket ',
    'restrict_ticket_assignment_to_department_members' => 'Restrict ticket assignment to department members',
    'outgoing_emails'                                  => 'Emails in uscita',
    'outgoing_email'                                   => 'Email in uscita',
    'template_set'                                     => 'Template Set',
    'auto_responding_settings'                         => 'Settaggi Auto-Risposta',
    'disable_for_this_department'                      => 'Disattiva per questo dipartimento',
    'auto_response_email'                              => 'Email Auto-Risposta',
    'recipient'                                        => 'Recipient',
    'group_access'                                     => 'Accesso Gruppo',
    'department_signature'                             => 'Firma Dipartimento',
    /*
      |--------------------------------------
      |  Team Create Page
      |--------------------------------------
     */
    'create_team'           => 'Crea Team',
    'team_lead'             => 'Team Lead',
    'assignment_alert'      => 'Allerta Assegnamento',
    'disable_for_this_team' => 'Disattiva per questo team',
    'teams'                 => 'Teams',
    /*
      |--------------------------------------
      |  Group Create Page
      |--------------------------------------
     */
    'create_group'         => 'Crea Gruppo',
    'goups'                => 'Gruppi',
    'can_create_ticket'    => 'Può creare ticket',
    'can_edit_ticket'      => 'Può editare ticket',
    'can_post_ticket'      => 'Può postare Ticket',
    'can_close_ticket'     => 'Può chiudere un ticket ',
    'can_assign_ticket'    => 'Può assegnare ticket',
    'can_transfer_ticket'  => 'Può trasferire ticket',
    'can_delete_ticket'    => 'Può cancellare ticket',
    'can_ban_emails'       => 'Può bannare le email',
    'can_manage_premade'   => 'Può Manage premade',
    'can_manage_FAQ'       => 'Può gestire le FAQ',
    'can_view_agent_stats' => 'Può visualizzare le stats per agente',
    'department_access'    => 'Accesso Dipartimenti ',
    'admin_notes'          => 'Note Admin',
    'group_members'        => 'Componenti del Gruppo',
    'group_name'           => 'Nome Gruppo',
    /*
      |--------------------------------------
      |  SMTP Page
      |--------------------------------------
     */
    'driver'     => 'Driver',
    'smtp'       => 'SMTP',
    'host'       => 'Host',
    'port'       => 'Porta',
    'encryption' => 'Criptazione',
    /*
      |----------------------------------------------------------------------------------------
      | Agent Panel [English(en)]
      |----------------------------------------------------------------------------------------
      |
      | The following language lines are used in all Agent Panel related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'agent_panel'       => 'Pannello Agente',
    'profile'           => 'Profilo',
    'change_password'   => 'Cambia Password',
    'sign_out'          => 'Esci',
    'Tickets'           => 'TICKETS',
    'inbox'             => 'Inbox',
    'my_tickets'        => 'Miei Tickets',
    'unassigned'        => 'Non Assegnati',
    'trash'             => 'Cestino',
    'Updates'           => 'AGGIORNAMENTI',
    'no_new_updates'    => 'Nessun nuovo aggiornamento',
    'check_for_updates' => 'Controlla aggiornamenti',
    'open'              => 'Apri',
    'inprogress'        => 'In elaborazione',
    'closed'            => 'chiuso',
    'Departments'       => 'DIPARTIMENTI',
    'tools'             => 'Strumenti',
    'canned'            => 'Canned',
    'knowledge_base'    => 'Knowledge Base',
    'loading'           => 'Caricando',
    'ratings'           => 'Ratings',
    'please_rate'       => 'Per favore rate:',
    'ticket_ratings'    => 'TICKET RATING',
    /*
      |-----------------------------------------------
      |  Profile
      |-----------------------------------------------
     */
    'user_information'    => 'informazioni utente',
    'time_zone'           => 'Time-zone',
    'phone_number'        => 'Numero di Telefono',
    'contact_information' => 'infomazioni Contatto',
    /*
      |-----------------------------------------------
      |  Dashboard
      |-----------------------------------------------
     */
    'dashboard'  => 'Cruscotto',
    'line_chart' => 'Tabella lineare',
    'statistics' => 'Statistiche',
    'opened'     => 'Aperto',
    'resolved'   => 'Risolto',
    'closed'     => 'Chiuso',
    'deleted'    => 'Cancellato',
    /*
      |------------------------------------------------
      |User Page
      |------------------------------------------------
     */
    'user_directory'  => 'User Directory',
    'ban'             => 'Banna',
    'user'            => 'Utente',
    'users'           => 'Utenti',
    'create_user'     => 'Crea Utente',
    'full_name'       => 'Nome Completo',
    'mobile'          => 'Mobile',
    'last_login'      => 'Ultimo Login',
    'user_profile'    => 'Profilo Utente',
    'assign'          => 'Assegna',
    'open_tickets'    => 'Tickets',
    'closed_tickets'  => 'Ticket Chiusi',
    'deleted_tickets' => 'Cancella Tickets',
    /*
      |------------------------------------------------
      |Organization Page
      |------------------------------------------------
     */
    'organizations'                 => 'Organizzazioni',
    'organization'                  => 'Organizzazione',
    'create_organization'           => 'Crea Organizzazione',
    'account_manager'               => 'Account Manager',
    'update'                        => 'Aggiorna',
    'please_select_an_organization' => 'Per favore seleziona una Organizzazione',
    'please_select_an_user'         => 'Per favore seleziona un utente',
    'organization_profile'          => 'Profilo Organizzazione',
    'organization-s_head'           => "Organization's Head",
    'select_department_manager'     => 'Seleziona Managere Dipartimento',
    'users_of'                      => 'Utenti di',
    /*
      |----------------------------------------------
      |  Ticket page
      |----------------------------------------------
     */
    'subject'                                         => 'Soggetto',
    'ticket_id'                                       => 'Ticket ID',
    'priority'                                        => 'Priorità',
    'from'                                            => 'Da',
    'last_replier'                                    => 'Ultimo a Rispondere',
    'assigned_to'                                     => 'Assegnato A',
    'last_activity'                                   => 'Ultima Attività',
    'answered'                                        => 'Risposto',
    'assigned'                                        => 'Assegnato',
    'create_ticket'                                   => 'Crea Ticket',
    'tickets'                                         => 'Tickets',
    'open'                                            => 'Apri',
    'Ticket_Information'                              => 'INFORMAZIONE TICKET',
    'Ticket_Id'                                       => 'ID TICKET',
    'User'                                            => 'UTENTE',
    'Unassigned'                                      => 'NON ASSEGNATO',
    'generate_pdf'                                    => 'Genera PDF',
    'change_status'                                   => 'Cambia Status',
    'more'                                            => 'Più',
    'delete_ticket'                                   => 'Cancella Ticket',
    'emergency'                                       => 'Emergenza',
    'high'                                            => 'Alta',
    'medium'                                          => 'Media',
    'low'                                             => 'Bassa',
    'sla_plan'                                        => 'SLA Plan',
    'created_date'                                    => 'Data Creata',
    'due_date'                                        => 'Data di Scadenza',
    'last_response'                                   => 'Ultima Risposta',
    'source'                                          => 'Sorgente',
    'last_message'                                    => 'Ultimo Messaggio',
    'reply'                                           => 'Risposta',
    'response'                                        => 'Resposta',
    'reply_content'                                   => 'Contenuto Riposta',
    'attachment'                                      => 'Allegato',
    'internal_note'                                   => 'Nota Interna',
    'this_ticket_is_under_banned_user'                => 'Questo ticket è di un utente bannato',
    'ticket_source'                                   => 'Sorgente Ticket',
    'are_you_sure_to_ban'                             => 'Sicuro di voler bannare',
    'whome_do_you_want_to_assign_ticket'              => 'A chi vuoi assegnare il ticket',
    'are_you_sure_you_want_to_surrender_this_ticket'  => 'Are you sure you want to surrender this Ticket',
    'add_collaborator'                                => 'Aggiungi Collaboratore',
    'search_existing_users'                           => 'Cerca utenti esistenti',
    'add_new_user'                                    => 'Aggiungi nuovo Utente',
    'search_existing_users_or_add_new_users'          => 'Cerca utenti esistenti o aggiungi nuovi utenti',
    'search_by_email'                                 => 'Cerca per Email',
    'list_of_collaborators_of_this_ticket'            => 'Lista dei Collaboratori di questo Ticket',
    'submit'                                          => 'Invia',
    'max'                                             => 'Max',
    'add_cc'                                          => 'Aggiungi CC',
    'recepients'                                      => 'Riceventi',
    'select_a_canned_response'                        => 'Seleziona una Canned Response',
    'assign_to'                                       => 'Assegna A',
    'detail'                                          => 'Dettaglio',
    'user_details'                                    => 'Dettagli Utente',
    'ticket_option'                                   => 'Opzioni Ticket',
    'ticket_detail'                                   => 'Dettagli Ticket',
    'Assigned_To'                                     => 'ASSEGNATO A',
    'locked-ticket'                                   => 'Allerta! Questo ticket è etato bloccato da un altro utente ed è al momento in risposta.',
    'access-ticket'                                   => 'Allerta! Questo ticket è etato bloccato da te per ',
    'minutes'                                         => ' minuti',
    'in_minutes'                                      => 'In minuti',
    'add_another_owner'                               => 'Aggiungi un altro possessore',
    'user-not-found'                                  => 'Utente non trovato.Prova ancora o aggiungi un nuovo utente.',
    'change-success'                                  => 'Successo! Il possessore di questo ticket è stato cambiato.',
    'user-exists'                                     => 'Utente già esistente. Prova a cercare questo stesso utente.',
    'valid-email'                                     => 'Inserisci un indirizzo email valido.',
    'search_user'                                     => 'Cerca utente',
     'merge-ticket'                                   => 'Unisci ticket',
    'title'                                           => 'Titolo',
    'merge'                                           => 'Unisci',
    'select_tickets'                                  => 'Seleziona ticket da unire',
    'select-pparent-ticket'                           => 'Seleziona un ticket padre',
    'merge-reason'                                    => 'Motivazione unione',
    'get_merge_message'                               => 'Questo ticket è stato unito con il ticket',
    'ticket_merged'                                   => ' è stato unito con il ticket.',
    'no-tickets-to-merge'                             => 'Non ci sono altri ticket di prorietà del possessore di questo ticket.',
    'merge-error'                                     => 'Richiesta non processabile riprova in seguito.',
    'merge-success'                                   => 'Tickets uniti con successo.',
    'merge-error2'                                    => 'Per favore selzeziona un ticket da unire.',
    'select-tickets-to merge'                         => 'seleziona due o più ticket da unire',
    'different-users'                                 => 'Tickte da utenti diversi',

    /*
      |------------------------------------------------
      |Tools Page
      |------------------------------------------------
     */
    'canned_response'        => 'Canned Response',
    'create_canned_response' => 'Create Canned Response',
    'surrender'              => 'Surrender',
    'view'                   => 'Vista',
    /*
      |-----------------------------------------------
      | Main text
      |-----------------------------------------------
     */
    'copyright'           => 'Copyright',
    'all_rights_reserved' => 'Tutti i diritti riservati',
    'powered_by'          => 'Sviluppato da',
    /*
      |------------------------------------------------
      |Guest-User Page
      |------------------------------------------------
     */
    'issue_summary'        => 'Sommario Problema',
    'issue_details'        => 'Dettagli Problema',
    'contact_informations' => 'Informazioni contatto',
    'contact_details'      => 'Dettagli Contatto',
    'role'                 => 'Ruolo',
    'ext'                  => 'EXT',
    'profile_pic'          => 'Foto Profilo',
    'agent_sign'           => 'Firma Agente',
    'inactive'             => 'Inattivo',
    'male'                 => 'Uomo',
    'female'               => 'Donna',
    'old_password'         => 'Vecchia Password',
    'new_password'         => 'Nuova Password',
    'confirm_password'     => 'Conferma Password',
    'gender'               => 'Genere',
    'ticket_number'        => 'Numero di Ticket',
    'content'              => 'Contenuto',
    /*
      |------------------------------------------------
      |   Error Pages
      |------------------------------------------------
     */
    'not_found'                                       => 'Non trovato',
    'oops_page_not_found'                             => 'Oops! Pagina non trovata',
    'we_could_not_find_the_page_you_were_looking_for' => 'Impossibile trovare la pagina che stavi cercando',
    'internal_server_error'                           => 'Errore server interno',
    'be_right_back'                                   => 'Torna indietro',
    'sorry'                                           => 'Spiacente',
    'we_are_working_on_it'                            => 'Ci stiamo lavorando',
    'category'                                        => 'Categoria',
    'addcategory'                                     => 'Aggiungi Categoria',
    'allcategory'                                     => 'Tutte le Categorie',
    'article'                                         => 'Articolo',
    'articles'                                        => 'Articoli',
    'addarticle'                                      => 'Aggiungi Articolo',
    'allarticle'                                      => 'Tutti gli Articoli',
    'pages'                                           => 'Pagine',
    'addpages'                                        => 'Aggiungi Pagine',
    'allpages'                                        => 'Tutte le pagine',
    'widgets'                                         => 'Widgets',
    'footer1'                                         => 'Footer 1',
    'footer2'                                         => 'Footer 2',
    'footer3'                                         => 'Footer 3',
    'footer4'                                         => 'Footer 4',
    'sidewidget1'                                     => 'Side Widget 1',
    'sidewidget2'                                     => 'Side Widget 2',
    'comments'                                        => 'Commenti',
    'settings'                                        => 'Settaggi',
    'parent'                                          => 'Padre',
    'description'                                     => 'Descrizione',
    'enter_the_description'                           => 'Inserisci la Descrizione',
    'publish'                                         => 'Pubblica',
    'published'                                       => 'Pubblicato',
    'draft'                                           => 'Bozza',
    'create_a_category'                               => 'Crea una Categoria',
    'add'                                             => 'Aggiungi',
    'social'                                          => 'Social',
    'comment'                                         => 'Commento',
    'not_published'                                   => 'Non Pubblicato',
    'numberofelementstodisplay'                       => 'numero elementi da visualizzare',
    //======================================
    'language'                                                                 => 'Lingua',
    'save'                                                                     => 'Salva',
    'create'                                                                   => 'Crea',
    'dateformat'                                                               => 'Formato Data',
    'slug'                                                                     => 'Slug',
    'read_more'                                                                => 'leggi di più',
    'view_all'                                                                 => 'Vedi tutto',
    'categories'                                                               => 'Categorie',
    'need_more_support'                                                        => 'Necessita più supporto',
    'if_you_did_not_find_an_answer_please_raise_a_ticket_describing_the_issue' => 'Se non hai trovato una risposta, per favore apri un ticket con al descrizione del problema',
    'have_a_question?_type_your_search_term_here'                              => 'Hai una domanda? Scrivi una parola da cercare qui...',
    'search'                                                                   => 'Cerca',
    'search_results'                                                           => 'Risultati Ricerca',
    'frequently_asked_questions'                                               => 'Domande Frequenti',
    'leave_a_reply'                                                            => 'Lascia una Risposta',
    'post_message'                                                             => 'Post Message',
    /*
      |--------------------------------------------------------------------------------------
      |  Client Panel [English(en)]
      |--------------------------------------------------------------------------------------
      | The following language lines are used in all Agent Panel related issues to translate
      | some words in view to English. You are free to change them to anything you want to
      | customize your views to better match your application.
      |
     */
    'home'                => 'Home',
    'submit_a_ticket'     => 'Invia un Ticket',
    'my_profile'          => 'Mio Profilo',
    'log_out'             => 'Logout',
    'forgot_password'     => 'Password Dimenticata',
    'create_account'      => 'Crea un Account',
    'you_are_here'        => 'Sei qui',
    'have_a_ticket'       => 'Have a Ticket',
    'check_ticket_status' => 'Controlla Status Ticket',
    'choose_a_help_topic' => 'Choose a Help Topic',
    'ticket_status'       => 'Status Ticket',
    'post_comment'        => 'Posta Commento',
    'plugin'              => 'Plugin',

    //Updates 16-1-2016 [Translation Required]
    'edit_profile'                                                                     => 'Edit profile',
    'you_are_here'                                                                     => 'You are here',
    'Send'                                                                             => 'SEND',
    'no_article'                                                                       => 'No article',
    'profile_settings'                                                                 => 'Profile settings',
    'please_fill_all_required_feilds'                                                  => 'Please fill all required feilds.',
    'successfully_replied'                                                             => 'Successfully replied',
    'please_fill_some_data'                                                            => 'Please fill some data!',
    'profile_updated_sucessfully'                                                      => 'Profile updated sucessfully',
    'password_updated_sucessfully'                                                     => 'Password updated sucessfully',
    'password_was_not_updated_incorrect_old_password'                                  => 'Password was not updated. Incorrect old password',
    'there_is_no_such_ticket_number'                                                   => 'There is no such ticket number',
    "email_didn't_match_with_ticket_number"                                            => "Email didn't match with ticket number",
    'we_have_sent_you_a_link_by_email_please_click_on_that_link_to_view_ticket'        => 'We have sent you a link by email. Please click on that link to view ticket',
    'no_records_on_publish_time'                                                       => 'No records on publish time',
    'your_details_send_to_system'                                                      => 'Your details send to the system',
    'your_details_can_not_send_to_system'                                              => 'Your details can not be sent to the system',
    'your_comment_posted'                                                              => 'Your comment posted',
    'sorry_not_processed'                                                              => 'Sorry not processed',
    'profile_updated_sucessfully'                                                      => 'Profile updated sucessfully',
    'password_was_not_updated'                                                         => 'Password was not updated',
    'sorry_your_ticket_token_has_expired_please_try_to_resend_the_ticket_link_request' => 'Sorry your ticket token has expired! Please try to resend the ticket link request',
    'sorry_you_are_not_allowed_token_expired'                                          => 'Sorry you are not allowed. Token has expired!',
    'thank_you_for_your_rating'                                                        => 'Thank you for your rating!',
    'your_ticket_has_been'                                                             => 'Your ticket has been',
    'failed_to_send_email_contact_administrator'                                       => 'Email sending failed. Please contact system administrator',
    /*
     * |---------------------------------------------------------------------------------------
     * |API settings
     * |----------------------------------------------------------------------------------
     * |The following lanuage line used to get english traslation of api settings in admin panel
     * |
     * |
     */
    'webhooks'                         => 'Webhooks',
    'enter_url_to_send_ticket_details' => 'Enter the URL to send the ticket details',
    'api'                              => 'API',
    'api_key'                          => 'API key',
    'api_key_mandatory'                => 'API key mandatory',
    'api_configurations'               => 'API configurations',
    'generate_key'                     => 'Generate key',
    'api_settings'                     => 'API settings',
    /*
     * -----------------------------------------------------------------------------
     * Error log and debugging settings
     * --------------------------------------------------------------------------
     *
     */
    'error-debug'                        => 'Error logs and debugging',
    'debug-options'                      => 'Debugging options',
    'view-logs'                          => 'View error logs',
    'not-authorised-error-debug'         => 'You are not authorised to access the URL',
    'error-debug-settings'               => 'Error and debugging settings',
    'debugging'                          => 'Debugging mode',
    'bugsnag-debugging'                  => 'Send app crash reports to help Ladybird improve Faveo',
    'error-debug-settings-saved-message' => 'Your error and debugging settings have been saved successfully',
    'error-debug-settings-error-message' => 'You have not made any change in the settings.',
    'error-logs'                         => 'Error logs',
    /* ---------------------------------------------------------------------------------------
     * Latest update 16-06-2016
     * -----------------------------------------------------------------------------------
     */
    'that_email_is not_available_in_this_system' => 'That Email is not available in this System',
    'use_subject'                                => 'Use Subject',
    'reopen'                                     => 'Reopen',
    'invalid_attempt'                            => 'Invalid Attempt',
    /* ---------------------------------------------------------------------------------------
     * Latest update 27-07-2016
     * -----------------------------------------------------------------------------------
     */
    'queue'  => 'Queue',
    'queues' => 'Queues',
    /*     * -------------------------------------------------------------------------------------------------
     * OTP  messages body to send to user while registering, resetting passwords
     * --------------------------------------------------------------------------------------------------
     */
    'hello'                   => 'Hello',
    'reset-link-msg'          => ",\r\nHere is the link to reset your password.\r\n",
    'otp-for-your'            => ",\r\nOTP for your",
    'account-verification-is' => 'account verification is',
    'extra-text'              => ".\r\nYou can login to verify your account via OTP or just click on the link we've sent to your email address.",
    'otp-not-sent'            => 'We faced some problem in sending OTP please try after some time.',
    /*     * -------------------------------------------------------------------------------------------
     * Ticket number settings 03-08-2016
     * ------------------------------------------------------------------------------------------
     */
    'format'               => 'Format',
    'ticket-number-format' => 'This setting is used to generate ticket numbers. Use hash signs (`#`) where digits are to be placed & dollar sign(‘$’) where characters are to be placed . Any other text in the number format will be preserved. ',
    'ticket-number-type'   => 'Choose a sequence from which to derive new ticket numbers. The system has a incrementing sequence and a random sequence by default',
    /*     * ----------------------------------------------------------------------------------------------------
     * Social media integration
     * ---------------------------------------------------------------------------------------------------------
     */
    'client_id'     => 'Client id',
    'client_secret' => 'Client secret',
    'redirect'      => 'Redirect URL',
    'details'       => 'Details',
    'social-media'  => 'Social media',
    /*     * ----------------------------------------------------------------------------------------------
     * Report
     * ----------------------------------------------------------------------------------------------
     */
    'report'              => 'Report',
    'Report'              => 'REPORT',
    'start_date'          => 'Start date',
    'end_date'            => 'End date',
    'select'              => 'Select',
    'generate'            => 'Generate',
    'day'                 => 'Day',
    'week'                => 'Week',
    'month'               => 'Month',
    'Currnet_In_Progress' => 'CURRENT IN PROGRESS',
    'Total_Created'       => 'TOTAL CREATED',
    'Total_Reopened'      => 'TOTAL REOPENED',
    'Total_Closed'        => 'TOTAL CLOSED',
    'tabular'             => 'Tabular',
    'reopened'            => 'Reopened',
    /* ---------------------------------------------------------------------------------------
     * Ticket Priority
     * -----------------------------------------------------------------------------------
     */
    'ticket_priority'                                           => 'Ticket priority',
    'priority'                                                  => 'Priority',
    'priority_desc'                                             => 'Priority description',
    'priority_urgency'                                          => 'Priority urgency',
    'priority_id'                                               => 'Priority Id',
    'priority_color'                                            => 'Priority color',
    'ispublic'                                                  => 'IsPublic',
    'is_default'                                                => 'By default',
    'create_ticket_priority'                                    => 'Create ticket priority',
    'agent_notes'                                               => 'Agent notes',
    'select_priority'                                           => 'Select priority',
    'normal'                                                    => 'Normal',
    'ispublic'                                                  => 'Visibility',
    'make-default-priority'                                     => 'Make default priority',
    'priority_successfully_created'                             => 'Priority successfully created',
    'priority_successfully_updated'                             => 'Priority successfully updated',
    'delete_successfully'                                       => 'Delete successfully',
    'user_priority_status'                                      => 'User priority status',
    'current'                                                   => 'Current:',
    'active_user_can_select_the_priority_while_creating_ticket' => 'Active user can select the priority while creating ticket',
    
    /* --------------------------------------------------------------------------------------------
     * Approval Updated
     * --------------------------------------------------------------------------------------------
     */
    'approval'             => 'Approval',
    'approval_tickets'     => 'Approval tickets',
    'approve'              => 'Approve',
    'approval_request'     => 'Approval request',
    'approvel_ticket_list' => 'Approvel ticket list',

    'approval_settings'                      => 'Approval settings',
    'close_all_ticket_for_approval'          => 'Close all tickets for approval',
    'approval_settings-created-successfully' => 'Approval settings created successfully',

    /* --------------------------------------------------------------------------------------------
     * Followup Updated
     * --------------------------------------------------------------------------------------------
     */
     'followup'              => 'Followup',
     'followup_tickets'      => 'Followup tickets',
     'followup_Notification' => 'Followup notification',

     /*
      *--------------------------------------------------------------------------------------------
      *Updated 6-9-2016
      *---------------------------------------------------------------------------------------
      */
     'not-available'  => 'Not available',
     /* --------------------------------------------------------------------------------------------
     * User Module
     * --------------------------------------------------------------------------------------------
     */
     'agent_report'                                                 => 'Agent report',
     'assign_tickets'                                               => 'Assign tickets',
     'delete_agent'                                                 => 'Delete agent',
     'delete_user'                                                  => 'Delete user',
     'confirm_deletion'                                             => 'Confirm deletion',
     'delete_all_content'                                           => 'Delete all content',
     'agent_profile'                                                => 'Agent profile',
     'change_role_to_admin'                                         => 'Change role to admin',
     'change_role_to_user'                                          => 'Change role to user',
     'change_role_to_agent'                                         => 'Change role to agent',
     'change_password'                                              => 'Change password',
     'role_change'                                                  => 'Role change',
     'password_generator'                                           => 'Password generator',
     'depertment'                                                   => 'Depertment',
     'duetoday'                                                     => 'Due today',
     'today-due_tickets'                                            => 'Today\'s due ticekts',
     'password_change_successfully'                                 => 'Password changed successfully',
     'role_change_successfully'                                     => 'Role changed successfully',
     'user_delete_successfully'                                     => 'User deleted successfully',
     'agent_delete_successfully'                                    => 'Agent deleted successfully',
     'select_another_agent'                                         => 'Select another agent',
     'agent_delete_successfully_and_ticket_assign_to_another_agent' => 'Agent deleted successfully and ticket assigned to another agent',
     'deleted_user'                                                 => 'Deleted User',
     'deleted_user_directory'                                       => 'Deleted User Directory',
     'restore'                                                      => 'Restore',
     'user_restore_successfully'                                    => 'User restore successfully',

     /*** updates 28-11-2016***/
     'apply'              => 'Apply',

     /** updates 2-12-2016 **/
     'sort-by'                      => 'Sort by',
     'created-at'                   => 'Created at',
     'or'                           => 'OR',
     'activate'                     => 'Activate',
     'system-email-not-configured'  => 'We are unable to process email request as the system has no configured email for sending mails. Please contact and report system admin.',
     'assign-ticket'                => 'Assign tickets',
     'can-not-inactive-group'       => 'Can not make the group inactive as it has agents assigned in it. Please assign those agents to another group and try again.',
     'internal-note-has-been-added' => 'Internal note added to the ticket',
     'active-users'                 => 'active users',
     'deleted-users'                => 'Deleted users',
     'view-option'                  => 'View options',
     'accoutn-not-verified'         => 'User account is not verified',
     'enabled'                      => 'Enabled',
     'disabled'                     => 'Disabled',
    
    /**----------------------------------------------------------------
     * Status
     * ----------------------------------------------------------------
     */
    'client'                    => 'Client',
    'send_email'                => 'Send Email',
    'visibility_to_client'      => 'Visibility to Client',
    'purpose_of_status'         => 'Purpose of Status',
    'status_to_display'         => 'Status to Display',
    'icon_color'                => 'Icon color',
        
    /**--------------------------------------------------------------------------------------------
     * Status
     * --------------------------------------------------------------------------------------------
     */
    'visible_to_client'     =>  'Visible to Client',
    'icon'                  =>  'Icon',
    'none'                  =>  'None',
    'allow_client'          =>  'Allow Client',
    'if_yes_status_name_will_be_displayed'      =>  'If yes status name will be displayed',
    'if_yes_then_clients_can_choose_this_status'        =>      'If yes then clients can choose this status',
    'purpose_of_status_will_perform_the_action_to_be_applied_on_the_status_selection'   =>  'Purpose of status will perform the action to be applied on the status selection',
    'this_message_will_be_displayed_in_the_thread_as_internal_note'         =>      'This message will be displayed in the thread as Internal note',
    'make_system_default_for_selected_purpose'      =>      'Make system default for Selected Purpose',
    'this_status_will_be_displayed_to_client_if_visibility_of_client_chosen_no'     =>      'This status will be displayed to client if visibility of client chosen no',
    'tick_who_all_to_send_notification' =>  'Tick who all to send notification',
    'Default'       =>  'Default',
    'unable_to_change_the_purpose_of_status_there_are_tickets_with_this_status'    =>  'Unable to change the purpose of status. There are tickets with this status.',
    'you_cannot_delete_a_default_ticket_status'     =>      'You cannot delete a default Ticket Status',
    'associated_tickets_moved_to_default_status'    =>      'Associated tickets moved to default status',
    'status_deleted_successfully'               =>          'Status Deleted Successfully',
    'have_been_marked_as'               =>      'Tickets have been marked as ',
    'have_been_deleted_forever'         =>      'Have been Deleted forever',
    'related_tickets_moved_to_default_status' =>  'Related tickets moved to default status',
    
    
     /**-------------------------------------------------------------------------
     * Business Hours
     * -------------------------------------------------------------------------
     */
    'business_hours'    =>  'Business hours',
    'business_hours_list'    =>  'Business Hours list',
    'hours'     =>      'Hours',
    'select_working_days/hours' =>  'Select working days/hours',
    '247hours'  =>  '24 hours * 7 days',
    'business_hours_created_successfully'=>'Business Hours Create Successfully',
    'business_hours_edit_successfully' =>'Business Hours Edit Successfully',
    'business_hours_delete_successfully'=>'Business Hours Delete Successfully',
    
    
    // days
    'day0'  =>      'Sunday',
    'day1'  =>      'Monday',
    'day2'  =>      'Tuesday',
    'day3'  =>      'Wednesday',
    'day4'  =>      'Thursday',
    'day5'  =>      'Friday',
    'day6'  =>      'Saturday',
    
    
    
    
    /**-------------------------------------------------------------------------
     * SLA
     * -------------------------------------------------------------------------
     */
    'sla_targets'       =>      'SLA Targets',
    'depertment'  =>      'Department',
    'halt_sla'=>'Halt Sla',


     /**-------------------------------------------------------------------------
     * Ticket Type
     * -------------------------------------------------------------------------
     */
     'ticket_type'=>'Ticket Types',
     'ticket_type_create'=>'Create Ticket Types',
     'type_desc'=>'Types Description',
     'create_ticket_type'=>'Create Ticket Types',
     'ticket_type_name'=>'Ticket Types',
     'ticket_types_successfully_created'=>'Ticket Types Successfully Created',
     'ticket_types_successfully_edit'=>'Ticket Types Successfully Edit',
     'make-default-type'=>'Make Default Type',
     'reply-can-not-be-empty'       => 'Reply can not be blank. Please enter your reply.',

     //updates 18-12-2016
     'account-created-contact-admin-as-we-were-not-able-to-send-opt' => 'Your account has been created successfully. Please contact admin for account activation as we were not able to send you an OPT code.',
     //update 19-12-2016
     'only-agents'         => 'Agent users',
     'only-users'          => 'Clients users',
     'banned-users'        => 'Banned users',
     'inactive-users'      => 'Inactive users',
     'all-users'           => 'All users',
     'search'              => 'Search...',

     //update 21-12-2016
     'selected-user-is-already-the-owner' => 'Selected user is already the owner of this ticket.',
     //update 30-12-2016
    'team_profile'=>'Team Profile',
    'teamlead_name'=>'Teamlead Name',
    'team_size'=>'Team Size',
    'team_report'=>'Team Report',
    'select_helptopic'=>'Select Helptopic',

    //updates 9/1/2017
    'no-subject' => 'No subject',
    'select_department_name'=>'Select Department Name',
    'select_company_name'=>'Select Company name',
    'select_source_name'=>'Select source name',
    'What_happens_when_this_SLA_due_time_approaches'=>'What happens when this SLA due time approaches?',
    'set_reminder_rule_when_a_ticket_response_time_approaches'=>'Set reminder rule when a ticket response time approaches',
    'escalate'=>'Escalate',
    'before_30_minites'=>'Before 30 Minutes',
    'before_1_hour'=>'Before 1 Hour',
    'before_2_hour'=>'Before 2 Hours',
    'before_1_day'=>'Before 1 Day',
    'before_7_day'=>'Before 7 Days',

    'after_30_minites'=>'After 30 Minutes',
    'after_1_hour'=>'After 1 Hour',
    'after_2_hour'=>'After 2 Hours',
    'after_1_day'=>'After 1 Day',
    'after_7_day'=>'After 7 Days',
    'assign_agent'=>'Assign Agent',
    'add_rule'=>'Add Rule',
    'Set_reminder_rule_when_a_ticket_resolution_time_approaches'=>'Set reminder rule when a ticket resolution time approaches',
    'what_happens_when_this_SLA_is_violated?'=>'What happens when this SLA is violated?',
     'set_escalation_rule_when_a_ticket_is_not_responded_to_on_time'=>'Set escalation rule when a ticket is not responded to on time',
      'set_escalation_hierarchy_when_a_ticket_is_not_resolved_on_time'=>'Set escalation hierarchy when a ticket is not resolved on time',
       'apply_this_to:'=>'Apply this to:',
       'choose_when_this_SLA_policy_must_be_enforced'=>'Choose when this SLA policy must be enforced',
       'Priority'=>'Priority',
       'respond_Within'=>'Respond Within',
       'resolve_within'=>'Resolve Within',
       'operational_hrs'=>'Operational Hrs',
       'send_report_email'=>'Send Report Email',
       'send_report_SMS'=>'Send Report SMS',
       'min'=>'Min',
       'hrs'=>'Hrs',
       'days'=>'Days',
       'months'=>'Months',
       'yes'=>'Yes',
       'no'=>'No',
       'add_new'=>'Add New',



         'select_month'=>'Select Month',
         'january'=>'January',
         'february'=>'February',
         'march'=>'March',
         'april'=>'April',
         'may'=>'May',
         'june'=>'Jun',
         'july'=>'July',
         'august'=>'August',
         'september'=>'September',
         'october'=>'October',
         'november'=>'November',
         'december'=>'December',
         '1'=>'1',
         '2'=>'2',
         '3'=>'3',
         '4'=>'4',
         '5'=>'5',
         '6'=>'6',
         '7'=>'7',
         '8'=>'8',

         '9'=>'9',
         '10'=>'10',
         '11'=>'11',
         '12'=>'12',
         '13'=>'13',
         '14'=>'14',
         '15'=>'15',
         '16'=>'16',
         '17'=>'17',
         '18'=>'18',
         '19'=>'19',
         '20'=>'20',
         '21'=>'21',
         '22'=>'22',
         '23'=>'23',
         '24'=>'24',
         '25'=>'25',
         '26'=>'26',
         '27'=>'27',
         '28'=>'28',
         '29'=>'29',
         '30'=>'30',
         '31'=>'31',
         'select_date'=>'Select date',
         'confirm'=>'CONFIRM',
         'select_month'=>'Select month',
         'select_date'=>'Select Date',
         'select_date_holiday_name_And_also_confirm_your_holiday'=>'Select Date,Holiday Name And also confirm your holiday',
         'select_month_holiday_name_And_also_confirm_your_holiday'=>'Select Month,Holiday Name Add also confirm your holiday',
         'confirm_your_holiday'=>'Confirm your holiday',

          '00'=>'00',
         '05'=>'05',
         '10'=>'10',
         '15'=>'15',
         '20'=>'20',
         '25'=>'25',
         '30'=>'30',
         '35'=>'35',
         '40'=>'40',
         '45'=>'45',
         '50'=>'50',
         '55'=>'55',
         'yearly_holiday_list'=>'Yearly Holiday List',
         'holidays_will_be_ignored_when_calculating_SLA_for_a_ticket'=>'Holidays will be ignored when calculating SLA for a ticket',

    'filter-agents-by-department' => 'Filter agents by department',
    'all-departments' => 'All departments',
    'current-owner'   => 'Current owner',
    
    /**
     * Auto assign
     */
    
    'only-login-agents'=>'Only login agents',
    'assign-ticket-even-agent-in-non-acceptable-mode'=>'Assign ticket even agent in non acceptable mode',
    'maximum-number-of-ticket-can-assign-to-agent'=>'Maximum number of ticket can assign to agent',
    
    /**
     * Billing
     */
    
    'level-of-apply'=>'Level of apply',
    'currency'=>'Currency',
    'note'=>'Billing note',
    'billable'=>'Billable',
    'hours'=>'Hours',
    'amount-per-hour'=>'Amount Per Hour',
    'amount'=>'Amount',
    'agent'=>'Agent',
    'action'=>'Action',
    'no-billing-records'=>'No billing records',
    'total-billable-time'=>'Total billable time',
    'total-non-billable-time'=>'Total non billable time',
    'total-amount'=>'Total amount',
    'agent'=>'Agent',
    'trigger-on'=>'Triger on',
    
    /**
     * Report
     */
    'today'=>'Today',
    'last-7-day'=>'Last 7 days',
    'last-30-days'=>'Last 30 days',
    'last-1-year'=>'Last 1 Year',
    'export'=>'Export',
    'date-range'=>'Date range',
    'mail'=>'Mail',
    'helpdesk-details'=>'Helpdesk Details',
    'overall-details'=>'Overall details',
    'resource-analysis'=>'Resource analysis',
    
    // updated 13/1/2016
    'select_organization'=>'Select Organization',
    'list_of_SLA_plan'=>'List of SLA plan',
    'list_of_business_hours'=>'List of Business Hours',
    'list_of_groups'=>'List of Groups',

    //updates 14/1/2017
    'bill' => 'Bill',
    'no_member_in_team' => 'No members found in this team.',
    'select_location' => 'Select location'
];
