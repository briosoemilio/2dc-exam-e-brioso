import React, { useState } from "react";
import "./styles.css";
import {
  INITIAL_BODY_TEXT,
  INITIAL_MEMBERS_LIST,
  INITIAL_TITLE_TEXT,
} from "./constants";

const EditTeamMember = (props) => {
  const { setAttributes } = props;
  const title = INITIAL_TITLE_TEXT;
  const body = INITIAL_BODY_TEXT;
  const members = INITIAL_MEMBERS_LIST;

  const [viewedMember, setViewedMember] = useState(null);

  const handleViewDetails = (index) => {
    setViewedMember((prev) => (prev === index ? null : index));
    setAttributes({ viewedMember: index, setViewedMember });
  };

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
          <div className="member-card" key={index}>
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
              <button
                className="view-details-button"
                onClick={() => handleViewDetails(index)}
              >
                View Details
              </button>
            </div>
            {viewedMember === index && (
              <div className="member-details">{member.details}</div>
            )}
          </div>
        ))}
      </div>
    </div>
  );
};

export default EditTeamMember;
