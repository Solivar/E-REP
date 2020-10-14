import React, { useState } from 'react';

import axios from 'axios';

import { API_URL } from '../Consts';

function VoteForm() {
    const [description, setDescription] = useState('');

    async function handleSubmit(e) {
        e.preventDefault();

        if (description.length < 1 || description > 512) {
            return;
        }

        const res = await axios.post(`${API_URL}/users/1/received-votes`, {
            receiver_id: 1,
            description,
            value: 1,
        });

        console.log(res);

        setDescription('');
    }

    function handleChange(e) {
        setDescription(e.target.value);
    }

    return (
        <div>
            <form onSubmit={handleSubmit}>
                <div className="form-group">
                    <label htmlFor="description">Description</label>
                    <textarea id="description" className="form-control" rows="3" onChange={handleChange}></textarea>
                </div>
                <button type="submit" className="btn btn-primary">Submit</button>
            </form>
        </div>
    );
}

export default VoteForm;
