import {shallowMount} from "@vue/test-utils";
import Vue from "vue";
import Vuex from "vuex";
import {expect} from "chai";
import GuildImage from "components/DisplayGuilds/GuildImage";

let localVue = Vue.use(Vuex);

describe("GuildImage", function () {
    let wrapper;

    beforeEach(function () {
        wrapper = shallowMount(GuildImage, {localVue});
    });

    it("should display image if prop is set", function () {
        wrapper.setProps({
            image: "image"
        });
        expect(wrapper.find("img").exists()).to.equal(true);
        expect(wrapper.find("div.image").exists()).to.equal(false);
    });

    it("should display loading skeleton image if no props are given", function () {
        expect(wrapper.find("img").exists()).to.equal(false);
        expect(wrapper.find(".skeleton-circle").exists()).to.equal(false);
        expect(wrapper.find(".skeleton-circle-animated").exists()).to.equal(true);
    });

    it("should display no icon if imageText prop is given but not image prop", function () {
        wrapper.setProps({
            imageText: "imageText"
        });
        expect(wrapper.find("img").exists()).to.equal(false);
        expect(wrapper.find(".is-guild.no-icon").exists()).to.equal(true);
        expect(wrapper.find(".is-guild.with-icon").exists()).to.equal(false);
    });

    it("should display tooltip if imageText is given", function () {
        let imageText = "imageText";
        wrapper.setProps({
            imageText: imageText
        });
        expect(wrapper.find(`.tooltip[data-tooltip="${imageText}"]`).exists()).to.equal(true);
    });

    it("should display first letter of each word if no image is given", function () {
        let imageText = "a test name";
        wrapper.setProps({
            imageText: imageText
        });
        expect(wrapper.find(".no-icon").text()).to.equal("atn");
    });
});