<template>
    <div class="customCommands loadComponent">
        <item-modifier :form-name="formName"
                       list-name="Custom Commands"
                       :new-item-layout="addCustomCommandTemplate"
                       item-layout-primary-key="commandid">
            <template slot-scope="props">
                <div class="from-group"
                     :class="{'has-danger': isDuplicate(props.activeItem) || props.activeItem.commandid.length === 0 || hasWhitespace(props.activeItem.commandid) || isBotwinderCommand(props.activeItem)}">
                    <label class="form-control-label">
                        <b>Id</b> - Unique command identifier, prefix+this is what you will use to run your command.
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">{{ command_prefix }}</span>
                            <input class="form-control" command-name="commandid" :value="props.activeItem.commandid"
                                   @input="updateActiveItemData">
                        </div>
                    </label>
                    <div class="form-control-feedback" v-if="isDuplicate(props.activeItem)">Id must be unique.</div>
                    <div class="form-control-feedback" v-if="isBotwinderCommand(props.activeItem)">
                        Id cannot be the same as a Botwinder command.
                    </div>
                    <div class="form-control-feedback" v-if="props.activeItem.commandid.length === 0">Id cannot be empty.</div>
                    <div class="form-control-feedback" v-if="hasWhitespace(props.activeItem.commandid)">
                        Id cannot contain whitespaces.
                    </div>
                </div>
                <div class="from-group" :class="{'has-danger': props.activeItem.response.length === 0}">
                    <label class="form-control-label">
                        <b>Response message</b> - You can use <code v-pre>{{sender}}</code> or <code v-pre>{{mentioned}}</code> variables. To PM the mentioned user, add <code>&lt;pm&gt;</code> to the beginning, and to PM the one that issued the command, add <code>&lt;pm-sender&gt;</code>
                        <textarea class="form-control" command-name="response" :value="props.activeItem.response"
                                  @input="updateActiveItemData"></textarea>
                    </label>
                    <div class="form-control-feedback" v-if="props.activeItem.response.length === 0">
                        Response is required
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        <b>Description</b> - the <code>{{ command_prefix }}help</code> message.
                        <input class="form-control" command-name="description" :value="props.activeItem.description"
                               @input="updateActiveItemData">
                    </label>
                </div>
            </template>
        </item-modifier>
    </div>
</template>

<script>
    import ItemModifier from './ItemModifier.vue'
    import {
        updateActiveItemData
    } from '../vuex/actions'
    import listItems from '../mixins/listItems'

    export default {
        mixins: [listItems],
        props: {
            formName: {
                required: true
            }
        },
        data: function() {
            return {
                itemLayoutPrimaryKey: 'commandid',
                loadingText: "Loading config please wait!",
                roleName: 'RoleWhitelist'
            }
        },
        components: {
            ItemModifier,
        },
        computed: {
            command_prefix() {
                return this.$store.state.command_prefix;
            },
            botwinderCommands() {
                return this.$store.state.botwinderCommands;
            },
            addCustomCommandTemplate() {
                return {
                    commandid: 'command',
                    response: 'Response',
                    description: ''
                };
            },
        },
        methods: {
            isBotwinderCommand(check) {
                // Check if command already exists
                for (let id of this.botwinderCommands) {
                    if (id === check.commandid) {
                        return true;
                    }
                }
                return false;
            },
            hasWhitespace(input) {
                return /^.*\s.*$/.test(input)
            },
            itemIsValid(command) {
                return !(command.commandid.length === 0
                    || this.hasWhitespace(command.commandid)
                    || this.isBotwinderCommand(command)
                    || command.response.length === 0);
            }
        }
    }
</script>
