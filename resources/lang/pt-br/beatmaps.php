<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'discussion-posts' => [
        'store' => [
            'error' => 'Falha ao salvar postagem',
        ],
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Falha ao atualizar votos',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'permitir kudosu',
        'delete' => 'excluir',
        'deleted' => 'Excluído por :editor às :delete_time.',
        'deny_kudosu' => 'negar kudosu',
        'edit' => 'editar',
        'edited' => 'Última vez editado por :editor às :update_time.',
        'kudosu_denied' => 'Impossibilitado de receber kudosu',
        'message_placeholder' => 'Digite aqui para postar',
        'message_placeholder_deleted_beatmap' => 'Esta dificuldade foi deletada e uma dicussão não poderá ser aberta.',
        'message_type_select' => 'Selecione o Tipo de Comentário',
        'reply_notice' => 'Pressione enter para responder.',
        'reply_placeholder' => 'Digite sua resposta aqui',
        'require-login' => 'Por favor, conecte-se para postar ou responder',
        'resolved' => 'Resolvido',
        'restore' => 'restaurar',
        'title' => 'Discussões',

        'collapse' => [
            'all-collapse' => 'Juntar',
            'all-expand' => 'Expandir',
        ],

        'empty' => [
            'empty' => 'Nenhuma discussão ainda!',
            'hidden' => 'Nenhuma discussão com o filtro selecionado.',
        ],

        'message_hint' => [
            'in_general' => 'Esta postagem vai para a discussão geral do beatmap. Para fazer uma sugestão neste beatmap, inicie a mensagem com uma marcação de tempo (ex.: 00:12:345).',
            'in_timeline' => 'Para fazer várias sugestões ao mesmo tempo, poste várias marcações (uma postagem por marcação de tempo).',
        ],

        'message_type' => [
            'disqualify' => '',
            'hype' => 'Hype!',
            'mapper_note' => 'Nota',
            'nomination_reset' => '',
            'praise' => 'Elogio',
            'problem' => 'Problema',
            'suggestion' => 'Sugestão',
        ],

        'mode' => [
            'events' => 'Histórico',
            'general' => 'Geral :scope',
            'timeline' => 'Linha do tempo',
            'scopes' => [
                'general' => 'Esta dificuldade',
                'generalAll' => 'Todas as dificuldades',
            ],
        ],

        'new' => [
            'timestamp' => 'Timestamp',
            'timestamp_missing' => 'ctrl-c in edit mode and paste in your message to add a timestamp!',
            'title' => 'Nova Discussão',
        ],

        'show' => [
            'title' => ':title mapeado por :mapper',
        ],

        'sort' => [
            '_' => 'Ordenado por:',
            'created_at' => 'data de criação',
            'timeline' => 'linha do tempo',
            'updated_at' => 'última atualização',
        ],

        'stats' => [
            'deleted' => 'Excluído',
            'mapper_notes' => 'Notas',
            'mine' => 'Meu',
            'pending' => 'Pendentes',
            'praises' => 'Elogios',
            'resolved' => 'Resolvidos',
            'total' => 'Tudo',
        ],

        'status-messages' => [
            'approved' => 'Esse beatmap foi aprovado em :date!',
            'graveyard' => "Esse beatmap não foi atualizado desde :date e provavelmente já foi abandonado pelo seu criador...",
            'loved' => 'Esse beatmap foi adicionado ao loved em :date!',
            'ranked' => 'Esse beatmap foi ranqueado em :date!',
            'wip' => 'Nota: Esse beatmap ainda não finalizado pelo seu criador.',
        ],

    ],

    'hype' => [
        'button' => 'Dar um Hype!',
        'button_done' => 'Já tem um Hype!',
        'confirm' => "Você tem certeza? Isso irá consumir um dos seus :n hypes e não poderá ser desfeito.",
        'explanation' => 'Adicione um Hype nesse beatmap e torne-o mais visível para que um Beatmap Nominator possa ranqueá-lo!',
        'explanation_guest' => 'Conecte-se e adicione um Hype nesse beatmap e torne-o mais visível para que um Beatmap Nominator possa ranqueá-lo!',
        'new_time' => "Você ganhará um novo hype em :new_time.",
        'remaining' => 'Você ainda tem :remaining hypes sobrando.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Trenzinho do Hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Deixar Feedback',
    ],

    'nominations' => [
        'disqualification_prompt' => 'Motivo da desqualificação?',
        'disqualified_at' => 'Desqualificado :time_ago (:reason).',
        'disqualified_no_reason' => 'sem motivo específico',
        'disqualify' => 'Desqualificar',
        'incorrect_state' => 'Erro ao realizar essa ação, tente atualizar a página',
        'nominate' => 'Nomear',
        'nominate_confirm' => 'Nomear este beatmap?',
        'nominated_by' => 'nomeado por :users',
        'qualified' => 'Esse beatmap será ranqueado em :date, caso nenhum problema seja encontrado.',
        'qualified_soon' => 'Estimado para ser ranqueado em breve, caso nenhum problema for encontrado.',
        'required_text' => 'Nomeações: :current/:required',
        'reset_message_deleted' => '',
        'title' => 'Estado de nomeação',
        'unresolved_issues' => 'Ainda há problemas não resolvidos que precisam de uma resposta.',

        'reset_at' => [
            'nomination_reset' => '',
            'disqualify' => '',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Você tem certeza? Postar um novo problema reiniciará as nomeações.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'digite palavras-chave...',
            'options' => 'Mais Opções de Busca',
            'not-found' => 'nenhum resultado',
            'not-found-quote' => '... não, nada encontrado.',
            'filters' => [
                'general' => 'Geral',
                'mode' => 'Modo',
                'status' => 'Estado de Ranqueamento',
                'genre' => 'Gênero',
                'language' => 'Idioma',
                'extra' => 'extra',
                'rank' => 'Ranque Conquistado',
                'played' => '',
            ],
        ],
        'mode' => 'Modo',
        'status' => 'Estado de Ranqueamento',
        'mapped-by' => 'mapeado por :mapper',
        'source' => 'de :source',
        'load-more' => 'Carregar mais...',
    ],
    'general' => [
        'recommended' => 'Dificuldade recomendada',
        'converts' => 'Incluir beatmaps convertidos',
    ],
    'mode' => [
        'any' => 'Todos',
        'osu' => 'osu!',
        'taiko' => 'osu!taiko',
        'fruits' => 'osu!catch',
        'mania' => 'osu!mania',
    ],
    'status' => [
        'any' => 'Todos',
        'ranked-approved' => 'Ranqueado & Aprovado',
        'approved' => 'Aprovado',
        'qualified' => 'Qualificado',
        'loved' => 'Loved',
        'faves' => 'Favoritos',
        'pending' => 'Pendente',
        'graveyard' => 'Desatualizado',
        'my-maps' => 'Meus beatmaps',
    ],
    'genre' => [
        'any' => 'Todos',
        'unspecified' => 'Não Especificado',
        'video-game' => 'Vídeo Game',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Outro',
        'novelty' => 'Atual',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Eletrônica',
    ],
    'mods' => [
        '4K' => '4K',
        '5K' => '5K',
        '6K' => '6K',
        '7K' => '7K',
        '8K' => '8K',
        '9K' => '9K',
        'AP' => 'Auto Pilot',
        'DT' => 'Double Time',
        'EZ' => 'Easy Mode',
        'FI' => 'Fade In',
        'FL' => 'Flashlight',
        'HD' => 'Hidden',
        'HR' => 'Hard Rock',
        'HT' => 'Half Time',
        'NC' => 'Nightcore',
        'NF' => 'No Fail',
        'NM' => 'Sem modificações',
        'PF' => 'Perfect',
        'Relax' => 'Relax',
        'SD' => 'Sudden Death',
        'SO' => 'Spun Out',
        'TD' => '',
    ],
    'language' => [
        'any' => 'Todos',
        'english' => 'Inglês',
        'chinese' => 'Chinês',
        'french' => 'Francês',
        'german' => 'Alemão',
        'italian' => 'Italiano',
        'japanese' => 'Japonês',
        'korean' => 'Coreano',
        'spanish' => 'Espanhol',
        'swedish' => 'Sueco',
        'instrumental' => 'Instrumental',
        'other' => 'Outro',
    ],
    'played' => [
        'any' => '',
        'played' => '',
        'unplayed' => '',
    ],
    'extra' => [
        'video' => 'Possui Vídeo',
        'storyboard' => 'Possui Storyboard',
    ],
    'rank' => [
        'any' => 'Todos',
        'XH' => 'Silver SS',
        'X' => 'SS',
        'SH' => 'Silver S',
        'S' => 'S',
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ],
];
