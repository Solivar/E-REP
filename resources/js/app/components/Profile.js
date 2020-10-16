import React, { Component } from 'react';

import Image from './image/Image';
import UserInfo from './UserInfo';
import VoteForm from './vote/VoteForm';
import VoteList from './vote/VoteList';

class Profile extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-12 col-md-3">
                        <div className="row row-cols-1">
                            <div className="col">
                                <Image />
                            </div>
                            <div className="col">
                                <UserInfo />
                            </div>
                        </div>
                    </div>
                    <div className="col-12 col-md-9">
                        <h4>Vote</h4>
                        <VoteForm />
                        <hr/>
                        <h4>Recent votes</h4>
                        <VoteList />
                    </div>
                </div>
            </div>
        );
    }
}

export default Profile;
