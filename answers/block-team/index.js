import React, { useState } from "react";
import EditTeamMember from "./components/EditTeamMember";
import SavedTeamMember from "./components/SavedTeamMember";

wp.blocks.registerBlockType("team-member/team-member-block", {
  title: "Team Member",
  icon: "smiley",
  category: "layout",

  attributes: {
    viewedMember: {
      type: "number",
      default: null,
    },
  },

  edit: function (props) {
    const { attributes, setAttributes } = props;
    return <EditTeamMember {...props} setAttributes={setAttributes} />;
  },

  save: function (props) {
    return <SavedTeamMember {...props} />;
  },
});
