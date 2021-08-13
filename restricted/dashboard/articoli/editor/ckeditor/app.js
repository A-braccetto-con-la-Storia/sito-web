// app.js
//./node_modules/.bin/webpack --mode development

import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Code from '@ckeditor/ckeditor5-basic-styles/src/code';
import Strikethrough from '@ckeditor/ckeditor5-basic-styles/src/strikethrough';
import Subscript from '@ckeditor/ckeditor5-basic-styles/src/subscript';
import Superscript from '@ckeditor/ckeditor5-basic-styles/src/superscript';
import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline';
import Indent from '@ckeditor/ckeditor5-indent/src/indent';
import Undo from '@ckeditor/ckeditor5-undo/src/undo';
import List from '@ckeditor/ckeditor5-list/src/list';
import TodoList from '@ckeditor/ckeditor5-list/src/todolist';
import CodeBlock from '@ckeditor/ckeditor5-code-block/src/codeblock';
import BlockQuote from '@ckeditor/ckeditor5-block-quote/src/blockquote';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight';
import RemoveFormat from '@ckeditor/ckeditor5-remove-format/src/removeformat';
import HorizontalLine from '@ckeditor/ckeditor5-horizontal-line/src/horizontalline';
import Link from '@ckeditor/ckeditor5-link/src/link';
import AutoLink from '@ckeditor/ckeditor5-link/src/autolink';
import MathType from '@wiris/mathtype-ckeditor5/src/plugin';
import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice';
import Clipboard from '@ckeditor/ckeditor5-clipboard/src/clipboard';
import SpecialCharacters from '@ckeditor/ckeditor5-special-characters/src/specialcharacters';
import SpecialCharactersEssentials from '@ckeditor/ckeditor5-special-characters/src/specialcharactersessentials';
import Table from '@ckeditor/ckeditor5-table/src/table';
import TableToolbar from '@ckeditor/ckeditor5-table/src/tabletoolbar';
import TableProperties from '@ckeditor/ckeditor5-table/src/tableproperties';
import TableCellProperties from '@ckeditor/ckeditor5-table/src/tablecellproperties';
import WordCount from '@ckeditor/ckeditor5-word-count/src/wordcount';
import MediaEmbed from '@ckeditor/ckeditor5-media-embed/src/mediaembed';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
import LinkImage from '@ckeditor/ckeditor5-link/src/linkimage';
import ImageInsert from '@ckeditor/ckeditor5-image/src/imageinsert';
/* import CKFinder from '@ckeditor/ckeditor5-ckfinder/src/ckfinder'; */

ClassicEditor
    .create( document.querySelector( '#editor' ), {
        plugins: [
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Code,
            Strikethrough,
            Subscript,
            Superscript,
            Underline,
            Indent,
            Undo,
            List,
            TodoList,
            CodeBlock,
            BlockQuote,
            Alignment,
            Font,
            Highlight,
            RemoveFormat,
            HorizontalLine,
            Link,
            AutoLink,
            MathType,
            PasteFromOffice,
            Clipboard,
            SpecialCharacters,
            SpecialCharactersEssentials,
            Table,
            TableToolbar,
            TableProperties,
            TableCellProperties,
            WordCount,
            MediaEmbed,
            Image,
            ImageInsert,
            ImageToolbar,
            ImageCaption,
            ImageStyle,
            ImageResize,
            LinkImage,
            //CKFinder
        ],
        toolbar: [
            /* 'ckfinder',
            'uploadImage',
            '|', */
            'undo',
            'redo',
            '|',
            'fontSize',
            'fontFamily',
            'fontColor',
            'fontBackgroundColor',
            '|',
            'bold',
            'italic',
            'code',
            'strikethrough',
            'link',
            'subscript',
            'superscript',
            'underline',
            'highlight',
            'removeFormat',
            '|',
            'indent',
            'outdent',
            'alignment',
            '|',
            'numberedlist',
            'bulletedlist',
            'todolist',
            '|',
            'insertTable',
            'insertImage',
            'mediaEmbed',
            'blockQuote',
            'codeBlock',
            'horizontalLine',
            '|',
            'MathType',
            'ChemType',
            'specialCharacters',
        ],
        placeholder: 'Inserisci il testo...',
        table: {
            contentToolbar: [
                'tableColumn', 'tableRow', 'mergeTableCells',
                'tableProperties', 'tableCellProperties'
            ],

            // Configuration of the TableProperties plugin.
            tableProperties: {
                // ...
            },

            // Configuration of the TableCellProperties plugin.
            tableCellProperties: {
                // ...
            }
        },
        image: {
            toolbar: [
                'imageStyle:full',
                'imageStyle:side',
                '|',
                'imageTextAlternative',
                '|',
                'linkImage'
            ]
        },
        ckfinder: {
            // Feature configuration.
        }
    } )
    .then( editor => {
        console.log( 'Editor was initialized', editor );
    } )
    .catch( error => {
        console.error( error.stack );
    } );