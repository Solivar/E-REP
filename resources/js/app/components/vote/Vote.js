import React from 'react';

function Vote({vote}) {
    return (
        <div className="card mb-3">
            <div className="card-body">
                <div className="row">
                    <div className="col-3">
                        <img src="https://via.placeholder.com/150" alt="User image" className="rounded-circle" />
                    </div>
                    <div className="col-9">
                        <p><span className="font-weight-bold">Rick Bardani</span> 2 days ago</p>
                        <p>{vote.description}</p>
                        <p>{vote.value}</p>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Vote;
