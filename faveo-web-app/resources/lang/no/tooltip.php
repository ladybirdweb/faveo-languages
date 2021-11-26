<?php

return [
//Admin Panel tooltips

/*----------STAFF>AGENTS----------------*/
	'agent-status'                          => 'Agent konto \'s status vil aktivere/deaktivere agent for å logge inn i systemet.',
	'agent-role'                            => 'Velg hvilken rolle du vil tilordne til denne agenten. Admin kan konfigurere alle innstillinger via Admin Panel. Agent kan bare opprette, vise, svare, oppdatere og løse billetter til avdelingen.',
	'agent-department'                      => 'Velg avdelingen som denne agenten tilhører.',
	'agent-team'                            => 'Velg teamet som denne agenten tilhører.',
	'agent-Access Permissions'              => 'Velg Adgangstillatelsene for denne Agent.',
	'agent-password'                        => 'Merk dette alternativet hvis du vil sende passord til agent via e-post.',

/*----------STAFF>Department---------------*/
	'department-type'                       => 'Velg Avdeling som Privat hvis du ikke vil at den skal være tilgjengelig i klientportalen.',
	'department-manager'                    => 'Velg en leder for denne avdelingen.',
	'department-outgoin-mail'               => 'Denne e-postadressen brukes til å sende svar til brukerne fra agenter når agent svarer på billetter.',
	'default-department'                    => 'Tilordne en standardavdeling hvis det finnes en felles/standardavdeling.',

/*-----------STAFF>TEAMS-----------------*/
	'team-status'                           => 'Aktiver denne lagstatusen slik at den blir tilgjengelig for billettoppgaver og for å motta varsler og varsler.',
	'team-lead'                             => 'Velg et lag Leder for dette laget som kan motta varsler og merknader som er skilt fra medlemmene.',
	'team-admin-notes'                      => 'Legg til notater om laginformasjon som du vil dele med andre admins',

/*----------STAFF>PERMISSION-------------*/
	'permission-status'                     => 'Aktiver statusen for denne tilgangstillatelsen for å være tilgjengelig for tildeling til en agent.',

/*-----------Ticket Custom form----------*/
	'link_department_and_helptopic_tooltip' => 'Ved å knytte helptopisk og avdeling kan klienter velge avdeling basert på utvalgt hjelpeprogram og omvendt. Vær oppmerksom på hvilket felt som holdes øverst i skjemaet, for å gjøre alternativer i det andre feltet.'
];
