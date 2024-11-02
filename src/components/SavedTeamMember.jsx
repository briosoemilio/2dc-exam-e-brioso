import React from "react";
import "./styles.css";
import {
  INITIAL_BODY_TEXT,
  INITIAL_MEMBERS_LIST,
  INITIAL_TITLE_TEXT,
} from "./constants";

const SavedTeamMember = () => {
  const title = INITIAL_TITLE_TEXT;
  const body = INITIAL_BODY_TEXT;
  const members = INITIAL_MEMBERS_LIST;

  return (
    <div className="main-container">
      <p id="our-board" className="p">
        Our Board
      </p>
      <p id="title" className="header1 text-bold">
        {title}
      </p>
      <p id="body" className="body-text">
        {body}
      </p>
      <div className="members-container">
        {members.map((member, index) => (
          <div className="member-wrapper" key={index}>
            <div className="member-card">
              <div className="photo-container">
                <img
                  src={member.photo}
                  style={{ height: 175, width: 175 }}
                  alt={`${member.name}'s photo`}
                />
              </div>
              <div className="details-container">
                <h2 className="member-name">{member.name}</h2>
                <p className="member-position">{member.position}</p>
                <button className="view-details-button" data-index={index}>
                  View Details
                </button>
              </div>
            </div>
            <div className="member-details" id={`details-${index}`} hidden>
              {member.details}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default SavedTeamMember;
