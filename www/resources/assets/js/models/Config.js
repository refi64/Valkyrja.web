import {ConfigData} from "./ConfigData";
import {createPublicRole, PublicRole, PublicRoleFactory} from "./PublicRole";
import configData from "../api/configData";
import RoleSelector from "../store/modules/RoleSelector";
import {types} from "../store/modules/RoleSelector";

// Main class containing a list of only ConfigData instances and lists of ConfigData instances
export class Config {
    /** @type {Array<ConfigData>} */
    config_data;

    /** @type {Array<ConfigErrors>} */
    errors;

    /**
     * @param {Array} values
     * @returns {Config}
     */
    static instanceFromApi(values) {
        let config = new Config;
        config.config_data = Config.getConfigData(values);
        return config;
    }

    /**
     * @param {Array} values
     * @returns {Array<ConfigData>}
     */
    static getConfigData(values) {
        let config_data = [];
        for (let i in values) {
            let arrayConfig;
            if (i === "roles") {
                arrayConfig = ConfigData.instanceFromApi(i, PublicRoleFactory.getConfigData(values[i]));
            }
            else if (values[i] instanceof Array) {
                arrayConfig = ConfigData.instanceFromApi(i, this.getConfigData(values[i]));
            }
            else {
                arrayConfig = ConfigData.instanceFromApi(i, values[i]);
            }
            config_data.push(arrayConfig);
        }
        return config_data;
    }

    /**
     *
     * @param {Guild} guild
     * @returns {Config}
     */
    addGuildData(guild) {
        let roles = this.find("roles");
        if (roles !== undefined && roles.value instanceof Array) {
            // retrieves all roles that does not exist in config
            let rolesToAdd = guild.roles.filter(guildRole => {
                return roles.value.filter(role => role.id === guildRole.id).length === 0;
            });
            for (let role of rolesToAdd) {
                roles.value.push(PublicRole.createNewRole(role.id, role));
            }
        }
        let channels = this.find("channels");
        if (channels !== undefined && channels.value instanceof Array) {
            /*// retrieves all roles that does not exist in config
            let channelsToAdd = guild.channels.filter(guildChannel => {
                return channels.value.filter(channel => channel.id === guildChannel.id).length === 0;
            });
            for (let channel of channelsToAdd) {
                channels.value.push(ConfigData.createNewRole(channel.id, channel));
            }*/
        }
        return this;
    }

    /**
     * Change value from a specific config data createInstance
     * @param id
     * @param value
     */
    change(id, value) {
        let config = this.find(id);
        config.value = value;
    }

    /**
     * Retrieves the config matching a specific data
     * @param id
     * @returns {ConfigData}
     */
    retrieve(id) {
        return this.find(id);
    }

    /**
     * Retrieves the config matching a specific data
     * @param id
     * @returns {ConfigData}
     */
    find(id) {
        return this.config_data.find(config => config.id === id);
    }
}




