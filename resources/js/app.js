import './bootstrap';

import { Editor } from '@tiptap/core'
import Document from '@tiptap/extension-document'
import Paragraph from '@tiptap/extension-paragraph'
import Bold from '@tiptap/extension-bold'
import Italic from '@tiptap/extension-italic'
import Underline from '@tiptap/extension-underline'
import Text from '@tiptap/extension-text'
import OrderedList from '@tiptap/extension-ordered-list'
import BulletList from '@tiptap/extension-bullet-list'
import ListItem from '@tiptap/extension-list-item'

window.setupEditor = function (content) {
    let editor
    const customOL = OrderedList.configure({
        HTMLAttributes: {
            class: 'list-decimal ml-5',
        },
    })
    const customUL = BulletList.configure({
        HTMLAttributes: {
            class: 'list-disc ml-5',
        },
    })
    return {
        content: content,
        init(element) {
            editor = new Editor({
                element: element,
                extensions: [
                    Document,
                    Bold,
                    Italic,
                    Underline,
                    customOL,
                    customUL,
                    ListItem,
                    Paragraph,
                    Text,
                ],
                editorProps: {
                    attributes: {
                        class: 'mt-1 w-full min-h-32 rounded-md border border-rose-400 bg-transparent p-2 outline-none focus:ring focus:ring-rose-400 focus:ring-opacity-50 text-white',
                    }
                },
                content: this.content,
                onUpdate: ({ editor }) => {
                    this.content = editor.isEmpty ? '' : editor.getHTML()
                }
            })

            this.$watch('content', (content) => {
                // If the new content matches TipTap's then we just skip.
                if (content === editor.getHTML()) return

                /*
                  Otherwise, it means that a force external to TipTap
                  is modifying the data on this Alpine component,
                  which could be Livewire itself.
                  In this case, we just need to update TipTap's
                  content and we're good to do.
                  For more information on the `setContent()` method, see:
                    https://www.tiptap.dev/api/commands/set-content
                */
                editor.commands.setContent(content, false)
            })
            return editor;
        }
    }
}

window.viewEditor = function (content) {
    let viewEditor;
    const customOL = OrderedList.configure({
        HTMLAttributes: {
            class: 'list-decimal ml-5',
        },
    })
    const customUL = BulletList.configure({
        HTMLAttributes: {
            class: 'list-disc ml-5',
        },
    })
    return {
        content: content,
        init(element) {
            viewEditor = new Editor({
                element: element,
                extensions: [
                    Document,
                    Bold,
                    Italic,
                    Underline,
                    customOL,
                    customUL,
                    ListItem,
                    Paragraph,
                    Text,
                ],
                editorProps: {
                    attributes: {
                        class: 'mt-1 w-full p-2 outline-none focus:ring focus:ring-rose-400 focus:ring-opacity-50 text-white',
                    }
                },
                content: this.content,
                onUpdate: ({ editor }) => {
                    this.content = editor.getHTML()
                },
                editable: false
            })
            viewEditor.commands.setContent(content, false)
            return viewEditor;
        }
    }
}
