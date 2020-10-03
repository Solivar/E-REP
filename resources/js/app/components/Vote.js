import React, { Component } from 'react';

class Vote extends Component {
    render() {
        return (
            <div className="card">
                <div className="card-body">
                    <div className="row">
                        <div className="col-3">
                            <img src="https://via.placeholder.com/150" alt="User avatar" className="rounded-circle" />
                        </div>
                        <div className="col-9">
                            <p><span className="font-weight-bold">Rick Bardani</span> 2 days ago</p>
                            <p>Very very bad. Not recommended.</p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Vote;
