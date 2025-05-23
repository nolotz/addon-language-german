<?php

return array(

    "feedback_question"         => "Frage, die dem Benutzer angezeigt wird.",
    "open_new"                  => "Ticket erstellen",
    "select_department"         => "Abteilung wählen",
    "select_department_desc"    => "Bitte wählen Sie eine passende Abteilung für Ihr Anliegen aus.",
    "no_departments"            => "Keine Abteilungen gefunden.",
    "department_user_details"   => "Abteilungen und Kunde",
    "enter_your_details"        => "Geben Sie Ihre Kontaktdaten ein",
    "enter_ticket_details"      => "Details",
    "enter_subject_message"     => "Betreff und Nachricht",
    "invalid_user"              => "Stellen sie sich dass die eingegeben Benutzer korrekt sind.",

    "registered_users"          => "Nur registrierte Benutzer",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Betreff",
    "no_subject"                => "Betreff fehlt",
    "last_action"               => "letzte Aktivität",
    "due_time"                  => "Fertigstellung",
    "created_time"              => "Erstellungsdatum",
    "submitted"                 => "Übertragen",
    "ticket_reply"              => "Ticketanwort",
    "ticket_note"               => "Ticketnotiz",
    "ticket_type"               => "Ticketart",

    "user_ticket"               => "Benutzerticket",
    "user_ticket_desc"          => "Ein neues Ticket im Namen eines neuen oder bestehenden Benutzer erstellen.",
    "existing_user"             => "Bestehender Benutzer",
    "new_user"                  => "Neuer Benutzer",
    "internal"                  => "Intern",
    "internal_ticket_desc"      => "Erstellt ein Ticket für den internen Gebrauch. Das Ticket wird Ihnen zugewiesen.",
    "ticket_opened"             => "Ihr Ticket wurde erfolgreich erstellt.",
    "enter_user_details"        => "Bitte geben Sie Ihre Informationen ein, oder melden sich mit Ihrem bestehenden Konto an.",
    "already_have_account"      => "Sie haben bereits ein Benutzerkonto. Bitte melden Sie sich mit diesem an und eröffnen dann ein Ticket.",

    "recent_tickets"            => "kürzlich eingereichte Tickets",
    "last_message_text"         => "Letzte Nachricht",

    "settings"                  => "Ticketeinstellungen",

    "priority"                  => "Priorität|Prioritäten",

    "channel"                   => "Kanal|Kanäle",
    "account"                   => "Benutzerkonto|Benuterkonten",

    "assign_operator"           => "Mitarbeiter zuweisen",
    "assigned_operator"         => "zuständiger Mitarbeiter",
    "assigned_to"               => "zugewiesen an",
    "assigned"                  => "zugewiesen",

    "department"                => "Abeiltung|Abteilungen",
    "change_department_order"   => "Sortieren sie die Abteilungen mit ziehen um die Anzeige für die Benutzer zu beinflussen.",
    "department_applicable"     => "auswählbare Abteilungen",
    "department_applicable_desc" => "Abteilungen die den Benutzern ermöglichen die Priorität der Tickets festzulegen. Gilt nur für den Frontend, alle Prioritäten in allen Abteilungen stehen dem Operator zur Verfügung.",

    "send_now"                  => "Jetzt senden",

    "tag"                       => "Stichwort|Stichwörter",

    "track_ticket"              => "Ticket verfolgen",
    "view_ticket"               => "Ticket anzeigen",

    // Recent activity
    "recent_activity"           => "Kürzliche Aktivität",

    "ticket_number"             => "Ticket Nummer",
    "ticket_format"             => "Ticket Nummer Format",

    // Departments
    "department_public_desc"    => "Ist die Abteilung im Frontend sichtbar.",
    "department_parent_desc"    => "Ist die Abteilung eine Subabteilung, wählen sie die Mutter aus. Unterabteilungen sind für interne Eskalationsprozesse und Verwaltung, Deshalb entfernt diese Einstellung einige Optionen unten.",
    "department_priority"       => "Abteiluungsprioritäten",
    "department_priority_desc"  => "Prioritäten die den Benutzern zur Vergügung stehen, mindestens eine muss ausgewählt sein. Im Standard sind alle Priorätten in der Abteilung verfügbar.",
    "department_no_format"      => "Optional, kann das Ticket Nummerformat übersteuern, leerlassen für Standard.",
    "department_operator"       => "Department Operators",
    "department_default_assign" => "Standardmäßig zuweisen an",
    "dept_default_assign_desc"  => "Nutzen sie diese Optionen wenn neue Tickets in der Abteilung an einen oder mehrere Operatoren zugewiesen werden sollen.",

    // Department emails
    "email_accounts_desc"       => "Konfiguriere Email Adressen für die ABteilung, alle eingehende Mails werden Tickets in der Abteilung eröffnen. Die erste Adresse ist die Standard Absenderadresse der Abteilung.",
    "department_port"           => "Default values are: 110 for POP3, 995 for secure POP3, 143 for IMAP, and 993 for secure IMAP. Leave blank to use the default value.",
    "department_encryption"     => "Mance Email Anbieter benötigen SSL oder TLS, um sich zu verbinden. Bei unklarheit leerlassen.",
    "department_delete_mail"    => "IMAP ermöglicht es die Emails am Server nicht zu löschen.",
    "protocol"                  => "Protokoll",
    "server"                    => "Mail Server",
    "port"                      => "Port",
    "encryption"                => "Verschlüsselung",
    "delete_downloaded"         => "abgeholte Mails löschen",
    "consume_all"               => "Alle Mails abholen",
    "email_download"            => "Email abholen",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Set up an email forwarder like the following, the PHP executable path may be different on your server.",
    "remote_email_piping"       => "Remote Email Piping",

    // Department email options
    "email_options"             => "Email Optionen",
    "email_user_on_email"       => "Bestätige per Mail Tickets die per Mail eröffnet wurden",
    "email_user_on_email_desc"  => "Wähle diese Optionen wenn Benutzer per mail informiert werden solle dass ihr Mail ein Ticket eröffnet hat.",
    "email_operators"           => "Benachrichtige Operators",
    "email_operators_desc"      => "Sollen die Operatoren per Mail benachrichtigt werden. Standardmäßig entscheidt die  \"email operators\" Option im Operator Panel, und sendet automatisch eine Mail für alle Operator Antworten.",
    // Department email templates
    "new_ticket_opened"         => "Neues Ticket eröffnet",
    "waiting_for_response"      => "Warten auf Antwort",
    "ticket_auto_closed"        => "Ticket wurde automatisch geschlossen",
    "closed_by_operator"        => "geschlossen durch einen Operator",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Feedback Formular|Feedback Formulare",
    "feedback_form_desc"        => "Feedback Formulare werden in der dargestellten Reihenfolge abgearbeiten, ziehen sie um die Reihenfolge zu ändern.",
    "view_feedback"             => "Betrachte Feedback",
    "ticket_feedback"           => "Ticket Feedback",
    "feedback_fields_error"     => "Es gab ein Problem die Ticketfeedback Felder zu lesen.",
    "time_after_resolved"       => "Zeit nach der Lösung",
    "time_after_resolved_desc"  => "Zeitspanne nach Lösung des Tickets, nachder eine Feedbackanfrage an den Benutzer geschickt wird.",
    "expires_after"             => "Ablaufdatum",
    "expires_after_desc"        => "Zeitspanne nach der das Feedbackforumlar nicht mehr gültig ist. Wir empfehlen 7 Tage, mit 0 kann das ablaufen deaktiviert werden.",
    "form_conditions"           => "Formular Kriterien",
    "form_conditions_desc"      => "Welche Kriterien muss das gelöste Tiket erfüllen damit dieses Formular zum Einsatz kommt. Wenn mehrere Formulare gültig sind, wird das oberste aus der Liste gewählt. Die Liste kann durch ziehen der Formulare an eine neue Position geändert werden.",
    "form_fields"               => "Formularfelder",
    "rating"                    => "Bewertung",
    "feedback_desc"             => "Vielen Dank für Ihre Anfrage, wir hoffen sie zur ihrer Zufriedenheit gelöst zu haben. Bitte bewerten sie unsere Antwort unten.",
    "good_satisfied"            => "Gut, Ich bin Zufriedengestellt.",
    "bad_not_satisfied"         => "Schlecht, ich bin unzufrieden",
    "feedback_not_found"        => "Ihr Feedback konnte nicht aktzeptiert werden, bitte senden sie uns Ihr feedback in einem Ticket.",
    "feedback_malformed_token"  => "Ihr Feedback konnte aufgrund technischer Probleme nicht verarbeitet werden. Bitte sendens sie uns ihr Feedback in einem Ticket",
    "feedback_expired"          => "Das Ticket wurde bereits vor längerer Zeit gelöst, dadurch kann es nicht mehr bewertet werden.",
    "feedback_questions"        => "Bitte beantworten sie folgende Fragen, um uns die Möglichkeit zu geben den Support zu verbessern.",
    "feedback_for_ticket"       => "Feedback für das Ticket #:number",
    "feedback_rating_desc"      => "Die im Ticket geleistete Unterstützung wurde als  <strong>:rating</strong> durch den Benutzer bewertet.",

    // Custom fields
    "customfield"               => "Ticket Benutzerdefiniertes Feld|Ticket Benutzerdefinierte Felder",
    "customfield_order"         => "Drag the rows to change the order that custom fields are shown to users when opening tickets via the web.",

    // Canned responses
    "cannedresponse"            => "Textbaustein|Textbausteine",

    // Filters
    "filter"                    => "Filter",
    "filter_condition"          => "Filter Kriterien",
    "filter_condition_desc"     => "Definiere die Kriterien nach denen die Tickets angezigt werden.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Macro Kriterien",
    "macro_action"              => "Macro Aktionen",
    "macro_action_desc"         => "Definiere Aktioinen die das macro ausführt. Bitte stellen sie sicher das die Aktioinen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert.",

    "from"                      => "Von",
    "to"                        => "An",
    "cc"                        => "Blindkopie / CC",

    "allowed_files"             => "Erlaubte Dateitypen als Anhang",

    // Drafts
    "draft_saved"               => "Entwurf gespeichet um :time",
    "save_draft"                => "Speicher Entwurf",
    "discard_draft"             => "Lösche Entwurf",

    // Locked
    "error_ticket_locked"       => "Diese Tiket wurde gesperrt und kann nicht mehr geändert werden, Bitte eröffnen wie für weietere Hilfe ein neues Ticket.",

    // Ticket Followups
    "follow_up"                 => "Nachverfolgung",
    "follow_up_status_desc"     => "Setze das Ticket auf einen anderen Status bis zum Nachverfolgungsdatum.",
    "exact_date_time"           => "Exakte Datum und Uhrzeit",
    "time_from_now"             => "Zeit von jetzt",

    // Schedule
    "schedule"                  => "Zeitplan|Zeitplane",
    "business_hour"             => "Geschäftszeiten",
    "business_hour_desc"        => "Geschäftszeiten zeigen an wenn Operators anwesend sind um Anfragen zu beantworten. Diese Zeiten beinflussen die die definierte Ablaufzeit.",

    // Holidays
    "holiday"                   => "Ferien",
    "holiday_or_on_the"         => "or, on the",
    "holiday_month_year_desc"   => "Das Jahr ist bei wiederkehrenden Ferien leer zu lassen. Wähle das Jahr nur aus wenn sich das Datum jedes Jahr ändert.",

    // SLA Plans
    "sla_plan"                  => "SLA Plan|SLA Pläne",
    "specific_schedule"         => "Speizifische Zeitpläne",
    "calendar_hours_24"         => "Kalenderstunden (24 Stunden)",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA Kriterien",
    "sla_condition_desc"        => "Kriterien an das Ticket für das automatisierte zuweisen einer SLA. Wenn mehrere SLAs zutreffen wird die erste zugwiesen. Die Reihenfolge der SLAs kann beinflusst werden.",
    "escalation_rule"           => "Eskalationsregeln",
    "escalation_rule_desc"      => "Definire Aktionen die ausgeführt werden wenn das Tiket kurz vor dem ablaufen oder schon ageblaufen ist. Bitte stellen sie sicher das die Aktioinen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert.",
    "condition"                 => "Bitte stellen sie sicher das die Aktioinen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert",
    "condition_group"           => "Kriterien Gruppe",
    "all_groups"                => "Alle Gruppen müssen den Kriterien entsprechen",
    "any_group"                 => "Eine oder mehrere Gruppen können den Kriterien entsprechen",
    "all_conditions"            => "Alle Kriterien in der Gruppe müssen entsprechen",
    "any_condition"             => "Eine oder mehrere Kriterien in der Gruppe müssen entsprechen",
    "sla_plan_desc"             => "SLA Pläne werden in der Reihenfolge abgearbeitet in der sie angezeigt werden. Ziehen sie die Zeilen um die Reihenfolge zu ändern.",

    // Reply options
    "reply_options"             => "Antwort optionen",
    "send_email_to_users"       => "Sende Mail an Benutzer",
    "send_email_to_operators"   => "Sende Mail an Operator(en)",
    "back_to_grid"              => "Zurück zur Tickettabelle",
    "take"                      => "Nehmen",
    "take_ownership"            => "Besitz übernehmen",
    "pause_duetime"             => "Ablaufzeit pausieren",
    "add_to_canned_responses"   => "Zu den Textbausteinen hinzufügen",
    "visible_to_all_operators"  => "Sichtbar für alle Operatoren",
    "set_status"                => "Setze den Status",
    "add_selfservice_link"      => "Hinzufügen des Self-Service Links",
    "search_selfservice"        => "Suche nach Artikeln im Self-Service",
    "search_canned"             => "Suche nach Textbausteinen",

    "mark_resolved"             => "markieren als gelöst",

    "ticket_signature"          => "Ticket Signatur",

    "default_open_status"       => "Standard Status nach eröffnen des Tickets",

    "default_resolve_status"    => "Standard Status nach lösen des Tickets",
    "default_resolve_status_desc" => "Wähle den Standardstatus für gelöste Tickets aus.",

    "waiting_response_time"      => "Zeitraum wie lange auf eine Antwort des Benutzers geantwortet wird.",
    "waiting_response_time_desc" => "Nach Ablauf bekommt der Benutzer einen Erinnerung über das inaktive Ticket, und wird gefragt ob das Ticket gelöst ist. Mit 0 wird kein Mail geschickt.",

    "close_inactive_tickets"    => "Schließe inaktive Tickets",
    "close_inactive_tickets_desc" => "Nach Abalauf der Zeit werden inaktive Tickets geschlossen. Setze den Wert auf 0 dann werden die Tickets nicht automatisch geschlossen.",

    "ticket_reply_order"        => "Reihenfolge der Nachrichten im Ticket",
    "ticket_reply_order_desc"   => "Wächle die Reihenfolge der Nachrichten in der Ticketanzeige, Aufsteigend die neueste Nachricht oben oder absteigend mit der ältesten Nachricht oben.",

    "ticket_notes_position"     => "Ticket Notiz Position",
    "ticket_notes_position_desc" => "Wähle aus wo in der Ticketanzeige die Notizen angezeigt werden sollen.",
    "ticket_notes_top_messages" => "Oben und in den Nachrichten",
    "ticket_notes_top"          => "Nur oben",
    "ticket_notes_messages"     => "Nur in den Nachrichten",

    "unregistered_only"         => "Nur unregistrierten Benutzern",

    "allow_unauth_users"        => "Erlaube anonyme Benutzer",
    "allow_unauth_users_desc"   => "Erlaube anonymen Benutzern das Ticket anzuzeigen.Deaktiviert die 'Track Ticket' Funktion, und Benutzer müssen sich registrieren und anmelden um Tickets zu sehen.",

    "default_department"        => "Standard Abteilung",
    "default_department_desc"   => "Standard abteilung für alle eingehenden Tickets über diesen Kanal.",

    "show_related_articles"     => "Zeige ähnliche Artikel",
    "show_related_articles_desc" => "Wenn der Nutzer den Titel/Betreff des neuen Tickets eingibt werden ihm ähnliche Artikel angezeigt. Benötigt das aktivierte Self Service Modult mit mindestens MySQL Version 5.6+",

    // Email Channel Settings
    "default_priority"          => "Standard Priorität",
    "default_priority_desc"     => "Priorität die allen Tickets über diesen Kanal zugewiesen wird.",

    "last_reply"                => "Letzte Antwort",
    "opened_at"                 => "geöffnet am",

    "change_department"         => "Wechsle Abteilung",
    "change_status"             => "Wechsle Status",
    "no_statuses"               => "Kein Status gefunden. Click <a href=':route'>here</a> um einen zu erstellen.",
    "no_priorities"             => "Keine Priorität gefunden. Click <a href=':route'>here</a> um eine zu erstellen.",
    "no_templates"              => "Keine Benutzerdefinierte Email Vorlate gefunden. Click <a href=':route'>here</a> um eine zu erstellen.",
    "no_tags"                   => "Keine Ticket Tags gefunden. Click <a href=':route'>here</a> um welche zu erstellen.",
    "no_departments_found"      => "Keine Abteilung gefunden. Click <a href=':route'>here</a> um eine zu erstellen.",
    "no_operators_found"        => "Keine Operstors gefunden. Click <a href=':route'>here</a> um einen zu erstellen.",
    "change_priority"           => "Wecshle Priorität",
    "add_tag"                   => "Füge Tag hinzu",

    "unlock"                    => "Entsperren",
    "merged"                    => "Zusammengeführt",
    "unmerge"                   => "Trennen",
    "close_and_lock"            => "Schließen und Sperren",

    "mass_reply"                => "Massen Antwort",

    "due_today"                 => "Läuft Heute ab",
    "overdue"                   => "Abgelaufen",
    "unassigned"                => "Nicht zugewiesen",

    "pause_duetime_desc"        => "Falls das Ticket einem aktiven SLA Plan zugewiesen ist, pausiere die Ablaufzeit bis zur ersten Nachverfolgung. Die Ablaufzeit startet mit der nächsten Notiz oder Antwort zum Ticket (Inklusive der Nachverfolgung).",

    "add_cc"                    => "Füge Blindempfänger hinzu (CC)",
    "reply_above_line"          => "Bitte antworten sie oberhalb dieser Linie/ Please reply above this line",

    "email_settings"            => "Email Einstellungen",
    "web_settings"              => "Web Einstellungen",
    "split_selected_replies"    => "Trenne ausgewählte Antworten",

    "track_ticket_not_found"    => "Konnte kein Ticket mit dieser Number und Benutzer Adresse finden.",

    "type_in_tags"              => "Type in Tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Liste der Dateierweiterungen, separiert durch das pipe | Symbol die als Anhang erlaubt sind. Als Beispiel: txt|png|jpg. Um alle zu erlauben geben sie folgendes ein: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Keine Operator Gruppen gefunden. Click <a href=':route'>here</a> um eine zu erstellen.",
    "no_user_groups"            => "Keine Benutzergruppen gefunden. Click <a href=':route'>here</a> um eine zu erstellen.",
    "remote_email_piping_desc"  => "Download the <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>remote email piping script</a> and follow the <a href='http://docs.supportpal.com/display/DOCS/Remote+Email+Piping' target='_blank'>documentation</a> on configuring it on your mail server.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Supportpal kann anhand der Mailadresse entscheiden an welches Department das Ticket geleitet wird. Mit dieser Einstellung bekommt diese Department alle Tickets mit unbekannten AN Adressen im Mail",
    "default_reply_options"     => "Standard Antwort Optionen",
    "default_reply_options_desc" => "Wähle die Standard Antwort option beim öffnen oder beantworten eines Tickets. Die  ':reply_option' Option wird Ticketbasiert auf grund der Abteilungs Option  ':department_option' gesetzt.",
    "associate_response_tag"    => "Textbaustein einem Tag zuweisen...",
    "canned_response_tags_desc" => "Füge Tags hinzu um einen Textbaustein als Antwort finden zu können.",
    "append_ip_address"         => "Hänge IP Adresse an",
    "append_ip_address_desc"    => "Hänge IP Adresse der Benutzer an Ihre Nachrichten in den Tickets.",
    "unassign_operator"         => "Entferne Operator",
    "remove_tag"                => "Entferne Tag",
    "message_clipped"           => "[Nachricht abgeschnitten]",
    "view_entire_message"       => "Gesamte Nachricht anzeigen",
    "no_custom_fields"          => "Keine Benutzerdefinierten Felder gefunden. Click <a href=':route'>here</a> um welche zu erstellen.",
    "follow_up_active"          => "Eine  <a class='view-followup' style='text-decoration: underline;'>follow up</a> ist gerade auf dem Ticket aktiv und läuft noch <strong>:time</strong>.",
    "disable_user_email_replies" => "Deaktivier Benutzer Antworten",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Standard Ticket Filter",
    "default_ticket_filter_desc" => "Dieser Filter wird verwendet wenn man auf den  'Verwalte Tickets' link clickt. Kann auf 'None', als Standard Option, stehen dadurch werden alle ungelösten Tickets angezeigt.",
    "recent_filters"            => "Kürzlich verwenden Filter",
    "inactive_tickets"          => "Inaktive Tickets",
    "default_open_status_desc"  => "Setze den Standardstatus wenn der Benutzer ein Ticket eröffnet oder auf Ticket antwortet bevor ein Operator eine Antwort geschrieben hat.",
    "default_reply_status"      => "Standard Antwort Status",
    "default_reply_status_desc" => "Wähle den Standardstatus der gesetzt werden wenn ein Benutzer auf einen Operator Nachricht antwortet.",
    "ticket_reply_order_default" => "System benutzt den Wert der unter Ticketeinstellungen gesetzt ist..",
    "select_a_parent"           => "Wähle einen Mutterabteilung...",
    "select_a_department"       => "Wähle eine Abteilung...",
    "department_operator_desc"  => "Sie können auch einzelne Operateure einer Abteilung zuweisen. Diese Operateure sind Zusätzlich zu den zugewiesenen Gruppen.",
    "department_group"          => "Abteilungsgruppen",
    "department_group_desc"     => "Sie können auch Gruppen der Abteilung zuweisen, empfohlen bei vielen Operateuren oder häufig wechselnden.",
    "ticket_other_brands"       => "Tickets in anderen Marken",
    "add_for_department"        => "Füge der Abteilung hinzu...",
    "record_order"              => "Ziehe die Zeile um die Reihenfolge der Datensätze zu ändern.",
    "reply_all"                 => "Antworten an Alle",
    "reply_without_cc"          => "Antworten (nur AN, Keine Blindkopie)",
    "email_accounts"            => "Email Konten",
    "add_another_email"         => "Füge eine zustäzliche Mail Adresse hinzu",
    "follow_up_date"            => "Nachverfolgungsdatum",
    "post_reply"                => "Sende Antwort",
    "post_note"                 => "Sende Notiz",
    "ticket_details"            => "Ticket Details",
    "organisation_tickets"      => "Organisations Tickets",
    "manage_tickets"            => "Verwalte Tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Abteilungsmutter",
    "department_brands"         => "Abteilungsmarken",
    "email_item"                => "Email :item",
    "from_name"                 => "Von Name",
    "from_address"              => "Von Address",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user am :date",
    "prioritise_reply-to"       => "Benutze Mail Header Reply-To",
    "prioritise_reply-to_desc"  => "Den Reply-To Mailheader benutzen anstatt die Von Adresse als Benutzer für das Ticket.",
    "note_options"              => "Notiz Optionen",
    "escalation_rules_desc"     => "Vom unten angführeten SLA Plan werden die geplanten Eskalationsregeln nach den angeführten Zeiten ausgeführt. Diese Zeiten ändern sich oder die Eskalationsregeln wird entfernt wenn der Operator antwortet.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Kein registrierter Benutzer. Der Email Kanal erlaubt nur Tickets von registrierten Mail Adressen.",
    "display_name"              => "Email Anzeige Name",
    "display_name_desc"         => "Optional, nur gesetzt um den Anzeigenamen für ausgehende Emails von dieser Abteilung zu überschreiben, leer lassen für Standard.",
    "display_name_options"      => "Die folgenden Twig Variablen:<br >{{ brand.name }} - MarkenName<br />{{ department.name }} - Abteilungsname<br />{{ department.frontend_name }} - Zeigt den Abteilungsnamen, wenn das Ticket zu einer Tochterabteilung gehört.<br />{{ operator.formatted_name }} - Operator Name<br /><em>Der Operator wird nicht immer verfügbar sein, benutze deshalb die 'not empty' Bedingung z. B. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Attachment abgelehnt",
    "enable_subaddresses"       => "Aktiviere Sub Adressen",
    "enable_subaddresses_desc"  => "Aktivieren um Sub Adressen für alle Abteilungen zu erlauben. Das erzeugt eindeutige Subadressen je Ticket die als  Reply-To Addresse in den ausgehenden Emails steht. Ihr Mail Server muss mit Sub Adressen umgehen können, Zusätzliche Konfigurationsschritte können nötig sein wenn sie Remote Piping für den Email Versand verwenden. Das aktivieren dieser Funktion ermöglicht es die Ticketnummer aus dem Betreff der Mails zu entfernen.",
    "email_replies_disabled"    => "Email Antworten sind deaktiviert",
    "disable_user_email_replies_desc" => "Antworten auf ein Ticket per Mail sind gesperrt, adas entfernt auch die Trennlinie in den ausgehenden Emails. Im Standard werden Antworten still ignoriert. Aber sie können den User informieren dass Antworten nicht erlaubt sind, durch das ändern der Vorlage in der  'Email Antworten deaktiviert' Option unten.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "An Ticket zugewiesen",
    "user_ticket_reply"         => "Benutzerantwort an Ticket",
    "new_internal_ticket"       => "Neues internes Ticket",
    "department_changed"        => "Abteilung geändert",
    "operator_ticket_reply"     => "Operator Ticket Antwort",
    "new_ticket_note"           => "Neue Ticket Notiz",
    "email_template_desc"       => "Sie können eine andere Email Vorlage als die Standard auswählen für Nachrichten an Benutzer und Operateure. Diese Vorlage ist dann der Standard für diese Abteilung.",
    "create_new_user"           => "Erstelle einen neuen Benutzer",
    "user_reply_internal_ticket" => "Kein Operator. Nur Operator dürfen interne Tickets ansehen.",
    "enter_email_address"       => "Gib Email Adresse an...",
    "email_user_frontend"       => "Schicke ein Email an Benutzer wenn das Ticket über den Frontend eröffnet wurde",
    "email_user_frontend_desc"  => "Diese Option steuert ob er ein Mail an sich selbst bekommt wenn er ein Ticket über den Frontend eröffnet.",
    "department_template_disabled" => "Die relevante Emailvorlage der Abteilung ist deaktiviert, deshalb kann kein Email geschickt werden.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Öffne ein neues Ticket im Namen eines existierenden Benutzers.",
    "canned_response_tag"       => "Textbaustein Tag|Textbaustein Tags",
    "response"                  => "Antwort|Antworten",
    "response_desc"             => "Der Textbaustein kann in mehreren Spreachen erstellt werden. Die richtige Sprache wird anhand der Benutzereinstellungen ausgewählt.",
    "no_slaplans"               => "Kein SLA Plan gefunden. Click <a href=':route'>here</a> um einen zu erstellen.",
    "filter_performance"        => "Performance Überlegungen und Empfehlungen",
    "filter_performance_desc"   => "<li>Filter die mehrere Tickets auswählen sind langsamer, versuche gelöste Tickets auszugrenzen</li><li>Filter die  'is not' Kriterien nutzen sind langsamer als 'is' Kriterien.</li><li>Filter die auf NULL prüfen (z.B Ticket tag is None) sind langsamer.</li><li>Vermeide Filter die auf mehrere Strings/Wörter prüfen da sie die Komplexität start steigern.</li><li>Kriterien mit 'begins with' oder 'contains' sind generall langsamer als 'equals' oder 'ends with' Kriterien.</li><li>Gelöste Tickets werden nicht für die Anzahl in der Sidebar mitgezählt.</li>",
    "run_macro"                 => "Run Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Akitivieren um Abteilung nur angemeldeten Benutzern anzuzeigen und um Emails nur von aktiv registrierten Adressen zu akzeptieren. Wenn aktiv werden Emails von nicht registrierten Adressen mit einer Antwort abgelehnt, um das Email zu ändern oder zudeaktivieren sehen sie bitte  'Nur Registrierte Benutzer' Vorlagen option unten.",
    "form_fields_desc"          => "Wenn sie mehr Informationen vom Benutzer einsammeln möchten können sie das Formular um benutzerdefinierte Felder erweitern. Der Feldtyp ist nicht mehr änderbar solbald ein Benutzer das Formular benutzt hat.",
    "email_and_other_accounts"  => "Email oder andere Kanal Konten",
    "delete_message"            => "Lösche Nachricht",
    "linked_tickets"            => "referenzierte Tickets",
    "add_linked_ticket"         => "Referenziere auf Ticket",
    "create_linked_ticket"      => "erstelle ein referenziertes Ticket",
    "copy_link"                 => "Kopiere link",
    "forward_message"           => "Weiterleiten der Nachricht",
    "forward_from_here"         => "Weiterleiten der Nachricht ab hier",
    "forward"                   => "Weiterleiten",
    "forward_options"           => "Weiterleitungsoptionen",
    "forwarded_to"              => "Weiterleiten An",
    "new_operator_reply"        => "Neue Operator Antwort",
    "new_user_reply"            => "Neue Benutzer Antwort",
    "add_bcc"                   => "Füge Blindkopie (BCC) hinzu",
    "at_least_one_recipient"    => "Definieren sie mindestens einen Empfänger",
    "forwarded_message"         => "------------------- Weitergeleitete Nachricht -------------------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Info: Beinflusst nur Tickets mit den Status 'Close Inactive Tickets' aktiviert.",
    "close_inactive_status_desc" => "Wechsle den Aktivierungsstatus des automaischen Schließens und Benachritigen inaktiver Tickets ('Waiting For Response' und  'Ticket Auto Closed' Vorlagen). Wenn aktiv kann die Zeit nach der die Benachrichtigung verschickt wird den Allgemeinen Ticketeinstellungen geändert werden.",
    "from_header_missing"       => "From: Header fehlt im Email.",
    "move_ticket"               => "Verschiebe Ticket",
    "move_ticket_step1"         => "Schritt 1: Wähle die neue Marke aus",
    "move_ticket_step2"         => "Schritt 2: Wähle eine Abteilung der neuen Marke aus",
    "current_record"            => "Aktueller :record",
    "new_record"                => "Neuer :record",
    "department_email"          => "Abteilung Email",
    "select_a_department_email" => "Wähle eine Abteilungs Mail Adresse aus...",
    "record_public_desc"        => "Wechsle um die :record nur für sie zugänglich zu machen.",
    "record_group_desc"         => "Wenn sie die Sichtbarkeit von :record auf einen Operator Gruppe einschränken wollen. Leer lassen damit alle Operateure sie sehen.",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Schalte um um das Makro zu deaktivieren. Das verhindert das automatische ausführen und macht es unsichtbar in der Ticketansicht",
    "macro_order_drag"          => "Ziehe die Zeilen um die Reihenfolge der Makros zu ändern.",
    "macro_order_processed"     => ":type Makros werden in der angezeigten Reihenfolge abgearbeitet.",
    "macro_type"                => "Macro Typ",
    "macro_type_desc"           => "Es gibt 3 Typen von Makros. Manuelle Makros können nur aus der Ticketansicht oder einer Tabelle ausgeführt werden, Automatische Makros laufen stündlich beziehen sich auf nicht gelöste Tickets, und 'Hook' Macros können auch auf bestimmte Zeitpläne limitiert werden. Eine 'Hook' Makro kann kein anders 'Hook' Makro starten um schleifen zu verhindern.",
    "macro_run_at_most"         => "Höchstens ",
    "macro_run_times"           => "mal laufen", // As in '5 times'
    "macro_run_at_most_desc"    => "Limitiere wieviele Druchläufe ein Macro für ein Ticket maximal haben darf, leer lassen für einen unbeschränkte Anzahl an Durchläufen.",
    "macro_events_desc"         => "Wähle ein oder mehr Ereigisse aus die das Makro starten. Die Kriterien unten werden geprüft bevor das Makro gestartet wird.",
    "macro_schedules_desc"      => "Im Standard kann das Makro 24/7 laufen, aber sie können es auf die Zeiten in einem oder mehreren Zeitplänen einschränken.",
    "macro_condition_desc"      => "Definiere die Kriterien mit denen die Gültigkeit des Makros auf die die Tickets bestimmt wird. Im Standard, ohne Kriterien, gilt es für alle Tickets. Mindestens ein Kriterium muss gesetzt sein für automatische Makros.",
    "add_remove_headers"        => "Hinzufügen und entfernen von Headers",
    "webhook_merge_fields"      => "'Merge fields' können in der URL und im Inahalts Feld benutzt werden. <a href=\"https://docs.supportpal.com/current/Merge+Fields\">Dokumentation über 'Merge Fields'</a>.",
    "webhook_ticket_required"   => "Ein Ticket muss existieren damit diese Funktion funktioniert.",
    "not_permitted"             => "Entschuldigung, sie sind nicht berechtigt das/die Ticket/Tickets anzusehen. Wenn das nicht korrekt ist wenden sie sich bitte an den Administrator.",
    "watch"                     => "Beobachte",
    "unwatch"                   => "Ignoriere",
    "watching"                  => "Beobachtend",
    "internal_ticket"           => "Internes Ticket|Interne Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Herunterladen...",
    "downloading_desc"          => "Wenn der Download nicht automatisch in ein paar Sekunden beginnt, clicken sie bitte auf <a href=':href'>click here</a> um den Download manuell zu starten.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(gehört zu :name)",
    "block_user"                => "Block User",
    "merge_tickets"             => "Füge Tickets zusammen",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Nachverfolgungen",
    "follow_up_multiple_active" => "Mehrere <a class='view-followup' style='text-decoration: underline;'>Nachverfolgungen</a> sind in auf diesem Ticket aktiv und werden beim nächsten geplanten Lauf ausgeführt um <strong>:time</strong>.",
    "follow_up_no_actions"      => "Die Nachverfolgung hat keine Aktionen, bitte bestätigen sie dass sie weiter möchten.",
    "status_after_running"      => "Status nach Durchlauf",
    "older_messages"            => ":count alte Nachrichten",
    "holiday_single_day"        => "Ein Tag",
    "holiday_date_range"        => "Datumsbereich",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Wähle das Ziel Ticket für die Zusammenführung",
    "im_not_sure"               => "Ich bin nicht sicher",
    "auto_reply_detected"       => "Automatische Antwort wurde erkannt - Es werden keinen Informationen an den/die Benutzer gesendet.",
    "cc_desc"                   => "Sie können einen Blindempfänger hinzufügen durch Eingabe der Mail Adresse.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> was drafting a message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Set Up Manually",
    "unresolved"                => "Ungelöst",
    "resolved"                  => "Gelöst",
    "manage_oauth_options"      => "To add or manage OAuth options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Ihre Rückmeldung wurde gespeichert.",
    "how_was_the_help"          => "Wie gut wurden Ihnen geholfen?",
    "update_feedback"           => "Rückmeldung aktualisieren",
    "verify_user"               => "Please verify the authenticity of the user.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets opened through the frontend interface for users or operator panel for operators.",
    "email_channel_name"        => "Email",
    "email_channel_desc"        => "Tickets opened from processing incoming email.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets and replies posted through the API.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Erstellt im Namen von ",
    "reply_canned_be_posted"    => "Es ist jetzt nich möglich auf dieses Ticket zu Antworten; Der Kanal oder das Kanals Konto sind deaktiviert.",

    /*
     * 4.1.0
     */
    "ticket_format_desc"        => "Kann alphanumerische und Sonderzeichen beinhalten <code>-_.+!*,</code><br />Auch folgende Variablen: %S for a sequential number | %N for a random number | %L for a random letter<br />Use {number} to repeat <strong>only</strong> after %N or %L, e.g. %N{4} equates to 4 random numbers, %L{3} equates to 3 random letters <br />Die PHP Funktion <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Datum</a> Parameter mit dem Prefix % Y,y,m,d,j,g,G,h,H,i,s",
    "append_ip_address_api_desc" => "Append the user's IP address to the end of their ticket messages (requires user_ip_address data to be provided).",
    "check_spam"                => "Check Spam Rules",
    "check_spam_api_desc"       => "Block messages which match spam rules.",
    "captcha_desc"              => "Wann soll ein Captcha beim eröffnen von Tickets abgefragt werden.",

    /*
     * 5.0.0
     */
    "also_viewing"              => "Betrachtet auch das Ticket:",
    "mark_as_read"              => "Mark as Read",
    "mark_as_unread"            => "Mark as Unread",
    "sla_targets"               => "SLA Target|SLA Targets",
    "sla_targets_desc"          => "Set target times that a ticket must be responded to by and resolved by per priority. The time will be counted only during business hours based on the schedule(s) chosen, decimal values can be used. Leave value blank to not set a target for that priority.",
    "first_reply_time"          => "First Reply Time",
    "next_reply_time"           => "Next Reply Time",
    "resolution_time"           => "Lösungszeiten",
    "reply_due_in"              => "Reply due :time",
    "resolve_in"                => "Resolve :time",
    "paused_ago"                => "Paused :time",
    "reply_due_time"            => "Reply due time",
    "resolution_due_time"       => "Resolution due time",
    "set_reply_due_time"        => "Set reply due time",
    "set_resolution_due_time"   => "Set resolution due time",

    /*
     * 5.2.0
     */
    "block_user_desc"           => "The user will be unable to open any further tickets, and the ticket moved to the trash.",

    /*
     * 5.3.0
     */
    "reject_duplicate_emails"   => "Reject Duplicate Emails",
    "reject_duplicate_emails_desc" => "Stop emails being imported more than once, detected based on the Message-ID header.",
    "duplicate_email_detected"  => "Duplicate email that has already been imported.",

    /*
     * 5.5.0
     */
    "rate_limiting"             => "Rate Limiting",
    "max_requests"              => "Max Requests",
    "max_requests_desc"         => "Set the maximum number of requests before a user is throttled.",
    "decay_time"                => "Decay Time",
    "decay_time_desc"           => "The number of minutes until the available attempts are reset.",
    "exclude_addresses"         => "Exclude Addresses",
    "exclude_addresses_desc"    => "A list of email addresses which are excluded from rate limits.",
    "enable_throttling"         => "Enable Throttling",
    "enable_throttling_api_desc" => "Limit the number of messages user's can post within a time frame. See <a href='https://docs.supportpal.com/current/App+Configuration#Throttling' target='_blank'>Throttling configuration</a> for more details on how to adjust the limits.",
    "close_without_notify"      => "Close (without notification)",
    "lock"                      => "Lock",
    "pin"                       => "Pin",
    "unpin"                     => "Unpin",

    /*
     * 5.6.0
     */
    "copy_to_new_filter"        => "Copy to New Filter",
    "alias_support"             => "Alias Support",
    "alias_support_desc"        => "Alias support analyses the recipient addresses of incoming emails to determine which department the email should be opened in. Disabling alias support will open all emails in the department they were fetched in irrespective of the recipient addresses.",

);
